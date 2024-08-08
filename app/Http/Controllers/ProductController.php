<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display the form for creating a new product

    public function index()
{
    $products = products::all(); // Assuming you have a Product model
    return view('backend.products.index', compact('products'));
}

    public function create()
    {
        return view('backend.products.create');
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        // Validate and store the product
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Logic to store the product in the database
        // ...

        return redirect()->route('backend.products.index')->with('success', 'Product added successfully.');
    }

    // Add other methods as necessary
}
