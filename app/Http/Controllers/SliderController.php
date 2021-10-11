<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider=Slider::all();
       return view('admin.slider.index',compact('slider'));
   }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.slider.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(([
            'name'=>'required',
              'header'=>'required',
               'sub_heading'=>'required',
               'text'=>'required',
               'img_link'=>'required',
               'btn'=>'required',
               'btnlink'=>'required',
                  'status'=>'required',

        ]));

        $slider=new slider([
            'name'=>$request->get('name'),

              'header'=>$request->get('header'),
               'sub_heading'=>$request->get('sub_heading'),
               'text'=>$request->get('text'),
               'img_link'=>$request->get('img_link'),
               'btn'=>$request->get('btn'),
               'btnlink'=>$request->get('btnlink'),
                  'status'=>$request->get('status'),
        ]);
        $slider->save();
        return redirect()->route('slider.index')->with('success','slider added successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
          return view('admin.slider.show',compact('slider'));
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
         return view('admin.slider.edit',compact('slider'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        $request->validate([
            'name'=>'required',
            'header'=>'required',
             'sub_heading'=>'required',
             'text'=>'required',
             'img_link'=>'required',
             'btn'=>'required',
             'btnlink'=>'required',
                'status'=>'required',

        ]);
        $slider->update($request->all());
        return redirect()->route('slider.index')->with('update','slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
         $slider->delete();
        return redirect('slider')->with('delete', 'Deleted successfully');
    }

}
