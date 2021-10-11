<?php

namespace App\Http\Controllers;

use App\Models\Siteconfig;
use Illuminate\Http\Request;

class SiteconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteconfig=Siteconfig::all();
       return view('admin.siteconfig.index',compact('siteconfig'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.siteconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(([
            'site_name'=>'required',
              'site_key'=>'required',
               'site_value'=>'required',
 'imglink'=>'required',
                  'status'=>'required',

        ]));

        $siteconfig=new siteconfig([
            'site_name'=>$request->get('site_name'),
              'site_key'=>$request->get('site_key'),
               'site_value'=>$request->get('site_value'),
               'imglink'=>$request->get('imglink'),
                  'status'=>$request->get('status'),
        ]);
        $siteconfig->save();
        return redirect()->route('siteconfig.index')->with('success','siteconfig added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siteconfig  $siteconfig
     * @return \Illuminate\Http\Response
     */
    public function show(siteconfig $siteconfig)
    {
          return view('admin.siteconfig.show',compact('siteconfig'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siteconfig  $siteconfig
     * @return \Illuminate\Http\Response
     */
    public function edit(siteconfig $siteconfig)
    {
         return view('admin.siteconfig.edit',compact('siteconfig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siteconfig  $siteconfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siteconfig $siteconfig)
    {
        $request->validate([
              'site_name'=>'required',
              'site_key'=>'required',
               'site_value'=>'required',
 'imglink'=>'required',

                  'status'=>'required',

        ]);
        $siteconfig->update($request->all());
        return redirect()->route('siteconfig.index')->with('update','siteconfig updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siteconfig  $siteconfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(siteconfig $siteconfig)
    {
         $siteconfig->delete();
        return redirect('siteconfig')->with('delete', 'Deleted successfully');
    }

}
