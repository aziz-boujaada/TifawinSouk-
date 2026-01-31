<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    //regex:/^\.(jpeg|jpg|png|webp)$/i
    public function store(Request $request)
    {
        $data = $request->validate([
               'name' => 'required|string|min:3' ,
               'description' => 'nullable|string',
               'price' => 'required|numeric',
               'stock' => 'required|integer',
               'category_id' => 'required|exists:categories,id',
               'image_path' => 'nullable|url'
        ]);

        $reference =  'REF-' . uniqid() . rand(1000 ,9999);
        $data['reference'] = $reference ;

        Product::create($data);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
