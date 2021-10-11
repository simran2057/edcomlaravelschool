<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $teacher=Teacher::all();
        return view('admin.teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.teacher.create');
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
             'post'=>'required',
              'img_link'=>'required',
               'details'=>'required',
                'experience'=>'required',
                 'address'=>'required',
                  'contact'=>'required',
                  'status'=>'required',

        ]));

        $teacher=new Teacher([
            'name'=>$request->get('name'),

              'post'=>$request->get('post'),
               'img_link'=>$request->get('img_link'),
               'details'=>$request->get('details'),
               'experience'=>$request->get('experience'),
               'address'=>$request->get('address'),
               'contact'=>$request->get('contact'),

                  'status'=>$request->get('status'),
        ]);
        $teacher->save();
       return redirect()->route('teacher.index')->with('sucess','Teacher success successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
         return view('admin.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
             $request->validate([
               'name'=>'required',
             'post'=>'required',
              'img_link'=>'required',
               'details'=>'required',
                'experience'=>'required',
                 'address'=>'required',
                  'contact'=>'required',
                  'status'=>'required',

        ]);
        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('update','Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
         $teacher->delete();
        return redirect('teacher')->with('delete', 'Deleted successfully');
    }

}
