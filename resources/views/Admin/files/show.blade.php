@extends('admin.layout.app')
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section id="css-classes" class="card">
            <div class="card-header">
              <h4 class="card-title">View File</h4>
            <a name="" id="" class="btn btn-secondary" href="{{url('files')}}" role="button" style="margin-top:20px;">Back</a>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="card-text">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Field Title</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><code>File Name</code></th>
                          <td>{{$file->title}}</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>File Address | Link</code></th>
                        <td><a href="{{asset('uploads/files/'.$file->file_link)}}" target="_blank">View or Download File</a>      </td>
                          </tr>
                        <tr>
                            <th scope="row"><code>File Description</code></th>
                            <td>{{$file->details}}</td>
                        </tr>
                        <tr>
                            <th scope="row"><code>Status</code></th>
                          <td>@if($file->status==1) Active @else Deactive @endif </td>
                        </tr>
                        <tr>
                            <th scope="row"><code>File Created At</code></th>
                          <td>{{$file->created_at}} </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
                </div>
            </div>
          </div>

        @endsection
