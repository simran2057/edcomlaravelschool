@extends('layouts.layout')
@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Teacher</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('index')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Teacher</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor 
    ============================================= -->
    <div class="advisor-area bg-gray default-padding bottom-less bg-cover">
        <div class="container">
            <div class="row">
                <div class="advisor-items col-3 text-light text-center">
                    @foreach($teachers as $teacher)
                    <!-- Single item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="{{url('teacher_detail/'.$teacher->id)}}">
                                <img src="{{'uploads/files/'.$teacher->img_link}}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>{{$teacher->post}}</span>
                                <h4>{{$teacher->name}}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single item -->
                   @endforeach
                   <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            {{$teachers->links()}}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor -->
@endsection