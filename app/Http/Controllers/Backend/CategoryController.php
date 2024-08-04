<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    // Display the form for creating a new category
    public function create()
    {
        return view('backend.category.create');
    }

    // Display a listing of categories
    public function index()
    {
        $data['records']=Category::all();
        return view('backend.category.index', compact('data')); // Pass the categories to the view
    }

    // Store a newly created category in storage
    public function store(CategoryRequest $request)
    {
        // Add created_by field to the request
        $request->merge(['created_by' => auth()->user()->id]);

        // Handle file upload
        if ($request->hasFile('icon_file')) {
            $iconfile = $request->file('icon_file');
            $iconname = time() . '_' . $iconfile->getClientOriginalName();
            $iconfile->move(public_path('assets/images/category'), $iconname); // Use public_path for better practice
            $request->merge(['icon' => $iconname]);
        }

        // Create a new category
        $record = Category::create($request->all());

        // Flash message based on creation status
        if ($record) {
            $request->session()->flash('success', 'Category Created Successfully');
        } else {
            $request->session()->flash('error', 'Category Creation Failed');
        }

        // Redirect to index route
        return redirect()->route('backend.category.index');
    }

    // Display the specified category
    public function show(string $id)
    {
       
    }

    // Other methods...
}
