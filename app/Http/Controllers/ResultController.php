<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\Coursecat;

use App\Models\SiteConfig;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result=Result::all();
         $result=Result::paginate(2);
        return view('admin.result.index',compact('result'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $sites = SiteConfig::all();
        $categories = Coursecat::all();

        // Search in the title and body columns from the posts table
        $results=Result::query()
            ->where('name', 'LIKE', "%{$search}%")
            
            ->paginate(8);

        // Return the search view with the resluts compacted
        return view('result', compact('results', 'sites','categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.result.create');
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

              'date'=>'required',
               'link'=>'required',

                  'status'=>'required',

        ]));

        $result=new Result([
            'name'=>$request->get('name'),

              'date'=>$request->get('date'),
               'link'=>$request->get('link'),

                  'status'=>$request->get('status'),
        ]);
        $result->save();
        return redirect()->route('result.index')->with('success','Result added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
          return view('admin.result.show',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
         return view('admin.result.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $request->validate([
              'name'=>'required',

              'date'=>'required',
               'link'=>'required',

                  'status'=>'required',

        ]);
        $result->update($request->all());
        return redirect()->route('result.index')->with('update','Result updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
         $result->delete();
        return redirect('result')->with('delete', 'Deleted successfully');
    }

}
