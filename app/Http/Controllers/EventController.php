<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Coursecat;
use App\Models\SiteConfig;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::all();
        $event=Event::paginate(2);
        return view('admin.event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'tittle'=>'required',
              'date'=>'required',
              'time'=>'required',
              'address'=>'required',
              'img_link'=>'required',
              'details'=>'required',
              'status'=>'required',

        ]));

        $event=new Event([
            'tittle'=>$request->get('tittle'),
             'date'=>$request->get('date'),
               'time'=>$request->get('time'),
               'address'=>$request->get('address'),
               'img_link'=>$request->get('img_link'),
               'details'=>$request->get('details'),
                  'status'=>$request->get('status'),
        ]);
        $event->save();
        return redirect()->route('event.index')->with('success','Event added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.show',compact('event'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit',compact('event'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'tittle'=>'required',
              'date'=>'required',
              'time'=>'required',
              'address'=>'required',
              'img_link'=>'required',
              'details'=>'required',
              'status'=>'required',

      ]);
      $event->update($request->all());
      return redirect()->route('event.index')->with('update','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect('event')->with('delete', 'Deleted successfully');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $sites = SiteConfig::all();
        $categories = Coursecat::all();

        // Search in the title and body columns from the posts table
        $events =Event::query()
            ->where('tittle', 'LIKE', "%{$search}%")
            ->orWhere('date', 'LIKE', "%{$search}%")
            ->paginate(8);

        // Return the search view with the resluts compacted
        return view('event', compact('events', 'sites','categories'));
    }


}
