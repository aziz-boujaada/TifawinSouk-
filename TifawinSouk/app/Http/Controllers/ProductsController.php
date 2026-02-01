<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Builder;
//  use Illuminate\Database\Eloquent\Collection;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
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
    public function show(Product $product)
    {
        return view('products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product )
    {
        $categories = Category::all();
       return view('products.edit' , compact('product' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product , Request $request)
    {
         $data = $request->validate([
               'name' => 'required|string|min:3' ,
               'description' => 'nullable|string',
               'price' => 'required|numeric',
               'stock' => 'required|integer',
               'category_id' => 'required|exists:categories,id',
               'image_path' => 'nullable|url'
        ]);

        $reference =  'REF-' . uniqid() . rand(100 ,999);
        $data['reference'] = $reference ;

        $product->update($data);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
