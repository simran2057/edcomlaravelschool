@extends('admin.layout.app')

@section('content')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <strong>{{Session::get('message')}}</strong>
        </div>

        <script>
          $(".alert").alert();
        </script>
        @endif

                <section id="multi-column">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">Manage files</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                              <ul class="mb-0 list-inline">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-content collapse show">
                            <div class="card-body card-dashboard" style="padding-top:0px !important;">
                              <div class="row">
                                  <div class="pb-2 col-md-6">
                                  @if(request()->get('data-show'))
                                  {{-- @else
                                  <a name="" id="" class="btn btn-info btn-sm" href="{{route('files.create')}}" role="button"><i class="fa fa-plus-circle manage_buttons_custom" aria-hidden="true"></i></a>
                                  <a name="" id="" class="btn btn-success btn-sm" href="{{url('files')}}" role="button"><i class="fa fa-refresh manage_buttons_custom" aria-hidden="true"></i></a> --}}
                                  @endif
                                  </div>
                                  <div class="col-md-6">
                                    @if(request()->get('data-show'))
                                  {{-- <a name="" id="" class="float-right btn btn-success btn-sm" href="{{url('files')}}" role="button"><i class="fa fa-bars manage_buttons_custom" aria-hidden="true"></i></a>
                                    @else
                                  <a name="" id="" class="float-right btn btn-danger btn-sm" href="{{url('files?data-show=trashed')}}" role="button"><i class="fa fa-trash-o manage_buttons_custom" aria-hidden="true"></i></a> --}}
                                    @endif
                                </div>
                              </div>
                              <table class="table table-striped table-bordered multi-ordering">
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th> Title</th>
                                    <th>File Link</th>
                                    <th>extension</th>
                                    <th>details</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($files as $file)
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$file->title}}</td>
                                    <td>{{$file->file_link}}</td>
                                    <td>{{$file->extension}}</td>
                                    <td>{{$file->details}}</td>
                                    <td>
                                        @if($file->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if( request()->get('data-show') )
                                        @else
                                        <a href="{{route('files.show',['file'=>$file->id])}}" name="submit" class="float-left btn btn-info btn-sm"><i class="fa fa-eye manage_buttons"  style="font-size:20px;padding:1px;"></i></a>
                                        @endif
                                        {{-- <a name="" id="" class="float-left btn btn-info btn-sm" href="{{$file->trashed()?route('files.restore',$file):route('files.edit',$file->id)}}" role="button"><i class="{{$file->trashed()?'fa fa-recycle': 'fa fa-pencil-square-o'}} manage_buttons" aria-hidden="true" style="font-size:20px;padding:1px;"></i></a> --}}
                                        @if( request()->get('data-show') )

                                            <button type="button" class="btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#border">
                                                <i class="fa fa-trash manage_buttons" aria-hidden="true" style="font-size:20px;padding:1px;"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="text-left modal fade" id="border" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                                            aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content border-pink">
                                                  <div class="modal-header border-bottom-pink">
                                                    <h4 class="modal-title" id="myModalLabel15">Are you sure you want to permanently delete this record?</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{ route('files.destroy',$file) }}" method="POST" enctype="multipart/form-data" class="float-left">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Confirm Delete</button>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                        @else
                                        <form action="{{ route('files.destroy',$file) }}" method="POST" enctype="multipart/form-data" class="float:left;">
                                            @csrf
                                            @method('delete')
                                            <button name="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash manage_buttons" aria-hidden="true" style="font-size:20px;padding:1px;"></i></button>
                                        </form>
                                        @endif
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                                <thead>
                                  <tr>
                                    <th>S.N.</th>
                                    <th> Title</th>
                                    <th>File Link</th>
                                    <th>extension</th>
                                    <th>details</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                  </thead>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>


                </div>
            </div>
          </div>

        @endsection
