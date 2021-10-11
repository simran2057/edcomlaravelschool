<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileAddRequest;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', except->);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = new File;
        // if($request->get('data-show')=='trashed')
        //     $files = $files->onlyTrashed();

        $files = $files->latest()->get();

        return view('admin.files.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileAddRequest $request)
    {
        $filename = str_replace(' ','',request('title'));
        $ext = $request->file_link->extension();
        $finalname = $filename.'_'.time().'.'.$request->file_link->extension();
        $request->file_link->move(public_path('uploads/files/'),$finalname);

        $file = new File;
        $file->title = $request->title;
        $file->file_link = $finalname;
        $file->extension = $ext;

        $file->save();

        return redirect('files')->with('message','File Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return view('admin.files.show',compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = File::all()->where('id',$id)->first();
        return view('files.create',compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $file = File::where('id',$id)->first();
        $file->title = $request->title;
        $file->details = $request->details;
        $file->status = $request->status;

        $file->update();

        return redirect('files')->with('message','File Information Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = new File;
        $file = File::withTrashed()->where('id',$id)->first();
        if($file->trashed()) {
            $last_file = public_path().'/uploads/files/'.$file->file_link;
            File::delete($last_file);

            $file->forceDelete();
            return redirect('files?data-show=trashed')->with('message','File is Deleted Parmanently.');
        }
        else {
            $file->delete();
            return redirect('files')->with('message','File is deleted Successfully.');
        }
    }
    public function restore($id)
    {
        $file = new File;
        $file = File::withTrashed()->where('id',$id)->first();
        $file->restore();

        return redirect('files')->with('message','File Restored Successfully.');
    }

}
