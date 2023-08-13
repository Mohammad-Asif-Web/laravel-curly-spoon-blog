<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::with('category')->orderBy('order_by')->get();
        return view('Backend.modules.sub_category.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // selecting Category table name, id by pluck as array
        $categories = Category::pluck('name', 'id');
        return view('Backend.modules.sub_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:3|string',
            'slug'=>'required|max:255|min:3|unique:sub_categories',
            'order_by'=>'required|numeric',
            'category_id'=>'required',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Sub category name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Category serial field is required',
            'category_id.required'=>'Category field is required',
            'status.required'=>'Sub category status field is required'
        ]
        );

        $sub_category_data = $request->all();
        // Convert a string to a safe version to be used in a URL, 
        // so that special character not to be allowed on the url
        // $request->input('slug) = data is requested(fetched) from Form 'slug' input tag.
        $sub_category_data['slug']= Str::slug($request->input('slug'));
        SubCategory::create($sub_category_data);

        session()->flash('msg', 'Sub Category Created Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('sub-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        $subCategory->load('category');
        return view('Backend.modules.sub_category.show', compact('subCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
         // selecting Category table name, id by pluck as array
         $categories = Category::pluck('name', 'id');
        return view('Backend.modules.sub_category.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:3|string',
            'slug'=>'required|max:255|min:3|unique:sub_categories,slug,'.$subCategory->id,
            'order_by'=>'required|numeric',
            'category_id'=>'required',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Sub category name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Category serial field is required',
            'category_id.required'=>'Category field is required',
            'status.required'=>'Sub category status field is required'
        ]
        );
        $sub_category_data = $request->all();
        $sub_category_data['slug']= Str::slug($request->input('slug'));
        $subCategory->update($sub_category_data);
        session()->flash('msg', 'Sub Category Updated Successfully');
        session()->flash('cls', 'info');
        return redirect()->route('sub-category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        session()->flash('msg', 'Sub Category Deleted Successfully');
        session()->flash('cls', 'error');
        return redirect()->route('sub-category.index');
    }
}
