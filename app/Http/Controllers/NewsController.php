<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Coursecat;

use App\Models\SiteConfig;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $news=News::all();
         $news=News::paginate(2);
        return view('admin.news.index',compact('news'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $sites = SiteConfig::all();
        $categories = Coursecat::all();

        // Search in the title and body columns from the posts table
        $newses =News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('date', 'LIKE', "%{$search}%")
            ->paginate(8);

        // Return the search view with the resluts compacted
        return view('news', compact('newses', 'sites','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title'=>'required',
             'text'=>'required',
              'date'=>'required',
               'time'=>'required',
                'location'=>'required',
                 'details'=>'required',
                  'status'=>'required',
                     'imglink'=>'required',

        ]));

        $news=new News([
            'title'=>$request->get('title'),
             'text'=>$request->get('text'),
              'date'=>$request->get('date'),
               'time'=>$request->get('time'),
                'location'=>$request->get('location'),
                 'details'=>$request->get('details'),
                  'status'=>$request->get('status'),
                   'imglink'=>$request->get('imglink'),
        ]);
        $news->save();
        return redirect('news')->with('success','News added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
               'title'=>'required',
             'text'=>'required',
              'date'=>'required',
               'time'=>'required',
                'location'=>'required',
                 'details'=>'required',
                  'status'=>'required',
                  'imglink'=>'required',


        ]);
        $news->update($request->all());
        return redirect()->route('news.index')->with('update','News updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect('news')->with('delete', 'Deleted successfully');
    }


}

