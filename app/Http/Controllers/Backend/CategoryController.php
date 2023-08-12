<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('order_by')->get();
        return view('Backend.modules.category.index', compact('categories'));
        // dd($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:5|string',
            'slug'=>'required|max:255|min:5|unique:categories',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Category name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Category serial field is required',
            'status.required'=>'Category status field is required'
        ]
        );

        $category_data = $request->all();
        // Convert a string to a safe version to be used in a URL, 
        // so that special character not to be allowed on the url
        // $request->input('slug) = data is requested(fetched) from Form 'slug' input tag.
        $category_data['slug']= Str::slug($request->input('slug'));
        Category::create($category_data);

        session()->flash('msg', 'Category Created Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // dd($category);

        return view('Backend.modules.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Backend.modules.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:5|string',
            'slug'=>'required|max:255|min:5|unique:categories,slug,'.$category->id,
            'order_by'=>'required|numeric',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Category name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Category serial field is required',
            'status.required'=>'Category status field is required'
        ]
        );
        $category_data = $request->all();
        $category_data['slug']= Str::slug($request->input('slug'));
        $category->update($category_data);
        session()->flash('msg', 'Category Updated Successfully');
        session()->flash('cls', 'info');
        return redirect()->route('category.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('msg', 'Category Deleted Successfully');
        session()->flash('cls', 'error');
        return redirect()->route('category.index');
    }
}
