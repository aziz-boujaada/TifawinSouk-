<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'nullable|string|',
        ]);
        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;

        Categories::create($data);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $category)
    {
        return view('categories.show' , compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $category) {
        return view('categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $category)
    {
        $data = $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'nullable|string|',
        ]);

        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;

       $category->update($data);

        return redirect()->route('categories.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $category)
    {
        $category->delete();
    
        return redirect()->route('categories.index');
    }
}
