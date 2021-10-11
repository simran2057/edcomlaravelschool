@extends('admin.layout.app')

@section('content')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <section id="basic-form-layouts">
            <div class="row match-height">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">@if(isset($files)) Edit @else Add @endif File</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body">
                      <form class="form" action="
                      @if(isset($files))
                        {{route('files.update', $files->id) }}
                      @else
                        {{route('files.store')}}
                      @endif
                        " method="POST" enctype="multipart/form-data">
                        @if(isset($files))
                            @method('PUT')
                        @endif
                        <div class="form-body">
                          <div class="row">
                              <div class="form-group col-md-6">
                                <label for="projectinput1">File Name</label>
                                <input type="text" id="projectinput1" class="form-control" placeholder="File Name"
                                name="title" value="@if(isset($files)) {{$files->title}} @endif">
                                @error('title')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                              </div>
                            @if(isset($files))
                            <div class="form-group col-md-6">
                                <label for="basicInputFile">Preview File</label> <br>
                                 <a href="{{url('uploads/files/'.$files->file_link)}}" target="_blank">{{$files->file_link}}</a>
                            </div>
                            @else
                            <div class="form-group col-md-6">
                                <label for="basicInputFile">Upload File</label>
                                <input type="file" class="form-control-file" id="basicInputFile" name="file_link" style="height:40px;border:1px solid #d8e0ec;border-radius:8px;padding-top:8px;padding-left:5px;">
                                @error('file_link')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            @endif

                            @if(isset($files))
                            <div class="form-group col-md-6">
                                <label for="projectinput8">Description</label>
                                <textarea id="projectinput8" rows="5" class="form-control" name="details" placeholder="File Description">@if(isset($files)) {{$files->details}} @endif</textarea>
                                @error('details')
                                <p class="form-text text-warning">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="projectinput5">Status</label>
                                <select id="projectinput5" name="status" class="form-control">
                                @if(isset($files))
                                    @if($files->status==1)
                                  <option value="1" selected>Active</option>
                                  <option value="0">Deactive</option>
                                    @else
                                  <option value="0" selected>Deactive</option>
                                  <option value="1">Active</option>
                                    @endif
                                @else
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                                @endif
                                </select>
                                @error('status')
                                <p class="form-text text-warning">
                                    {{$status}}
                                </p>
                                @enderror
                              </div>
                              @endif
                          </div>
                        </div>
                        @csrf
                        <div class="form-actions">
                        <a type="button" id="" class="btn btn-warning mr-1" href="{{url('files')}}" role="button">
                            <i class="ft-x"></i> Cancel
                          </a>
                          <button type="submit" class="btn btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                          </button>
                        </div>
                      </form>
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
