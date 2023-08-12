<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::orderBy('order_by')->get();
        return view('Backend.modules.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.modules.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:3|string',
            'slug'=>'required|max:255|min:3|unique:tags',
            'order_by'=>'required|numeric',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Tag name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Tag serial field is required',
            'status.required'=>'Tag status field is required'
        ]
        );
        $tag_data = $request->all();
        // Convert a string to a safe version to be used in a URL, 
        // so that special character not to be allowed on the url
        // $request->input('slug) = data is requested(fetched) from Form 'slug' input tag.
        $tag_data['slug']= Str::slug($request->input('slug'));
        Tag::create($tag_data);

        session()->flash('msg', 'Tag Created Successfully');
        session()->flash('cls', 'success');
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('Backend.modules.tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('Backend.modules.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name'=>'required|max:255|min:3|string',
            'slug'=>'required|max:255|min:3|unique:tags,slug,'.$tag->id,
            'order_by'=>'required|numeric',
            'status'=>'required',
        ],
        $message=[
            'name.min'=>'Tag name is too small',
            'slug.min'=>'Slug is too small',
            'order_by.required'=>'Tag serial field is required',
            'status.required'=>'Tag status field is required'
        ]
        );
        $tag_data = $request->all();
        $tag_data['slug']= Str::slug($request->input('slug'));
        $tag->update($tag_data);
        session()->flash('msg', 'Tag Updated Successfully');
        session()->flash('cls', 'info');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        session()->flash('msg', 'Tag Deleted Successfully');
        session()->flash('cls', 'error');
        return redirect()->route('tag.index');
    }
}
