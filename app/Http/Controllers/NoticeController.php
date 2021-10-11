<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $notice=Notice::all();
        return view('admin.notice.index',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.notice.create');
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
            'heading'=>'required',
              'date'=>'required',
               'detail'=>'required',
               'started'=>'required',
               'ended'=>'required',
                  'status'=>'required',

        ]));

        $notice=new notice([
            'heading'=>$request->get('heading'),
              'date'=>$request->get('date'),
               'detail'=>$request->get('detail'),
               'started'=>$request->get('started'),
               'ended'=>$request->get('ended'),
                  'status'=>$request->get('status'),
        ]);
        $notice->save();
        return redirect()->route('notice.index')->with('success','notice added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
          return view('admin.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
         return view('admin.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
        $request->validate([
            'heading'=>'required',
            'date'=>'required',
             'detail'=>'required',
             'started'=>'required',
             'ended'=>'required',
                'status'=>'required',

        ]);
        $notice->update($request->all());
        return redirect()->route('notice.index')->with('update','notice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(notice $notice)
    {
         $notice->delete();
        return redirect('notice')->with('delete', 'Deleted successfully');
    }

}
