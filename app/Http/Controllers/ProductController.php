<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display the form for creating a new product
    public function create()
    {
        return view('admin.product.create');
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

        return redirect()->route('backend.product.index')->with('success', 'Product added successfully.');
    }

    // Add other methods as necessary
}
