<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {
        $admission=admission::all();
        return view('admin.admission.index',compact('admission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.admission.create');
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
            'name'=>'required',
              'email'=>'required',
              'phone'=>'required',
              'address'=>'required',
              'skill'=>'required',
              'gender'=>'required',
              'ward_no'=>'required',
              'message'=>'required',
              'status'=>'required',

        ]));

        $admission=new Admission([
            'name'=>$request->get('name'),
             'email'=>$request->get('email'),
               'phone'=>$request->get('phone'),
               'address'=>$request->get('address'),
               'skill'=>$request->get('skill'),
               'gender'=>$request->get('gender'),
               'ward_no'=>$request->get('ward_no'),
               'message'=>$request->get('message'),
                'status'=>$request->get('status'),
        ]);
        $admission->save();
        return redirect()->route('admission.index')->with('success','Admission added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        return view('admin.admission.edit',compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
       $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'skill'=>'required',
            'gender'=>'required',
            'ward_no'=>'required',
            'message'=>'required',
            'status'=>'required',

      ]);
      $admission->update($request->all());
      return redirect()->route('admission.index')->with('update','Event updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
         $admission->delete();
        return redirect('admission')->with('delete', 'Deleted successfully');
    }
}
