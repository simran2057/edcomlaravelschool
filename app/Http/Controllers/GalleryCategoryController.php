<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=GalleryCategory::all();
        return view('admin.galleryCategory.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleryCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
             'g_name' => 'required',
            'g_status'=> 'required'
        ]

        );
        $category=new GalleryCategory([
            'g_name'=> $request-> get('g_name'),
            'g_status'=> $request->get('g_status'),
        ]);
        $category->save();
        return redirect('galleryCategory')->with('sucess', 'Gallery Category sucessfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryCategory $galleryCategory)
    {
        return view('admin.galleryCategory.show', compact('galleryCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryCategory $galleryCategory)
    {
        return view('admin.galleryCategory.edit', compact('galleryCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryCategory $galleryCategory)
    {
        $request->validate([
            'g_name'=>'required',
            'g_status'=>'required'
        ]);

        $galleryCategory->update($request->all());
        return redirect()->route('galleryCategory.index')->with('update',"updated succesfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryCategory  $galleryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryCategory $galleryCategory)
    {
        $galleryCategory->delete();
        return redirect('galleryCategory')->with('deleted', 'deleted succesfully');
    }

}

