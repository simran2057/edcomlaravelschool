<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Coursecat;
use Illuminate\Http\Request;
use App\Models\Admin_user;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $course=Course::all();
        $coursecat=Coursecat::all();
        return view('admin.course.index',compact('course','coursecat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $coursecat=Coursecat::all();
         return view('admin.course.create',compact('coursecat'));
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
              'text'=>'required',
               'time'=>'required',
               'duration'=>'required',
               'imglink'=>'required',
                  'status'=>'required',
                  'c_id'=>'required',

        ]));

        $course=new course([
            'name'=>$request->get('name'),
              'text'=>$request->get('text'),
              'time'=>$request->get('time'),
               'duration'=>$request->get('duration'),
               'imglink'=>$request->get('imglink'),
                  'status'=>$request->get('status'),
                   'c_id'=>$request->get('c_id'),
        ]);
        $course->save();
        return redirect()->route('course.index')->with('success','course added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    // public function show(course $course)
    // {
    //       return view('admin.course.show',compact('course'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
         return view('admin.course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $request->validate([
            'name'=>'required',
            'text'=>'required',
             'time'=>'required',
             'duration'=>'required',
             'imglink'=>'required',
                'status'=>'required',

        ]);
        $course->update($request->all());
        return redirect()->route('course.index')->with('update','course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
         $course->delete();
        return redirect('course')->with('delete', 'Deleted successfully');
    }

}
