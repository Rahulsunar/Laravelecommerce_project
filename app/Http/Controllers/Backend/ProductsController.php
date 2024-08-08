<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\ProductsRequest;
use App\Models\products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public $module ='products';
    public $base_folder='backend.products.';
    public $base_route='backend.products.';
    public $image_folder= 'assets/images/products';
    public $model;

    public function __construct(){
        $this->model=new products();
    }
    // Display the form for creating a new product
public function create()
{
    $data['categories'] = Category::all();
    dd($data['categories']);
    return view($this->base_folder .'create', compact('data'));
}


    

    // Display a listing of categories
    public function index()
{
    $data['records'] = $this->model->all();
    dd($data); // Debugging line to check data
    return view($this->base_folder.'index', compact('data'));
}


    // Store a newly created category in storage
    public function store(ProductsRequest $request)
    {
        // Add created_by field to the request
        $request->merge(['created_by' => auth()->user()->id]);

        // Handle file upload
        if ($request->hasFile('icon_file')) {
            $iconfile = $request->file('icon_file');
            $iconname = time() . '_' . $iconfile->getClientOriginalName();
            $iconfile->move($this->image_folder,$iconname);
            $request->merge(['icon' => $iconname]);
        }

        // Create a new category
        $record = $this->model->create($request->all());

        // Flash message based on creation status
        if ($record) {
            $request->session()->flash('success', $this->module . 'Category Created Successfully');
        } else {
            $request->session()->flash('error', $this->module . 'Category Creation Failed');
        }

        // Redirect to index route
        return redirect()->route($this->base_route .'index');
    }

    // Display the specified category
    public function show(string $id)
    {
        $data['record'] = $this->model->find($id);

        if ($data['record'] == null) {
            request()->session()->flash('error', $this->module . 'Not Found!!');
            return redirect()->route($this->base_route .'index');
        }

        return view($this->base_folder .'show', compact('data'));
    }

    // Show the form for editing the specified category
    public function edit(string $id)
    {
        $data['record'] = $this->model->find($id);

        if ($data['record'] == null) {
            request()->session()->flash('error', $this->module . 'Not Found!!');
            return redirect()->route($this->base_route . 'index');
        }

        return view($this->base_folder . 'edit', compact('data'));
    }

    // Update the specified category in storage
    public function update(ProductsRequest $request, string $id)
    {
        $data['record'] = $this->model->find($id);

        if ($data['record'] == null) {
            request()->session()->flash('error', $this->module . 'Not Found!!');
            return redirect()->route($this->base_route . 'index');
        }

        // Handle file upload
        if ($request->hasFile('icon_file')) {
            $iconfile = $request->file('icon_file');
            $iconname = time() . '_' . $iconfile->getClientOriginalName();
            $iconfile->move($this->image_folder, $iconname);
            $request->merge(['icon' => $iconname]);
            unlink(public_path($this->image_folder .'/' . $data['record']->icon));
        }

        $request->request->add(['updated_by' => auth()->user()->id]);

        if ($data['record']->update($request->all())) {
            $request->session()->flash('success', $this->module . 'Updated Successfully');
        } else {
            $request->session()->flash('error', $this->module . 'Update Failed');
        }

        return redirect()->route($this->base_route .'index');
    }

    // Remove the specified category from storage
    public function destroy(string $id)
    {
        $data['record'] = $this->model->find($id);

        if ($data['record'] == null) {
            request()->session()->flash('error', $this->module . 'Not Found!!');
        } else {
            if ($data['record']->delete()) {
                request()->session()->flash('success', $this->module . 'Deleted');
            } else {
                request()->session()->flash('error', $this->module . 'Delete Failed!!');
            }
        }

        return redirect()->route($this->base_route . 'index');
    }

    // Display a listing of trashed categories
    public function trash()
    {
        $data['records'] = Category::onlyTrashed()->get();
        return view('backend.category.trash', compact('data'));
    }
}
