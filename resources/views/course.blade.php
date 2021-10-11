@extends('layouts.layout')
@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
     @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image:  url({{'uploads/files/'.$site->imglink}});">
    @endif
    @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12"><br><br>
                    <h1>Course </h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                       
                        <li class="active">Course</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <!-- Start Course Info -->
                <div class="col-md-9">
                     <div class="top-course-items">
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height"><a href="{{ url('course_detail/'.$course->id) }}">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{'/uploads/files/'.$course->imglink}}" alt="Thumb">
                                   
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                    <h4>
                                        <a href="{{ url('course_detail/'.$course->id) }}">{{$course->name}}</a>
                                    </h4>
                                    <p>
                                        {{$course->text}}
                                    </p>
                                
                                </div>
                            </div></a>
                        </div>
                        <!-- Single Item -->
                        
                     </div>
                </div>
                <!-- End Course Info -->

                <!-- Start Course Sidebar -->
                <div class="sidebar col-md-3">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="title">
                                <h4>Search</h4>
                            </div>
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" class="form-control">
                                    
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="{{ url('course_detail/'.$course->id) }}">{{$course->name}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Course Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

  
    <!-- Start Footer 
    ============================================= -->
@endsection