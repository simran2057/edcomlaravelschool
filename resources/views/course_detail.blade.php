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
                    <h1>Course Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                       
                        <li class="active">Course Name</li>
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
                <!-- Start Course Info -->
                <div class="col-md-9">
                    <div class="courses-info">
                        <h2>
                            {{ $course_detail->name }}
                        </h2>
                        <div class="course-meta">
                            <div class="item author">
                                <div class="thumb">
                                    <a href="#"><img alt="Thumb" src="{{'/uploads/files/'.$course_detail->imglink}}"></a>
                                </div>
                            </div>
                            <div class="item category">
                                <h4>Category</h4>
                                @foreach ($categories as $category)
                         <li><a href="{{ url('course/index/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
                             @endforeach
                            </div>
                            <div class="item rating">
                                <h4>Review</h4>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(1 Rating)</span>
                            </div>
                         
                            <div class="align-right">
                                
                            </div>
                        </div>
                        <img src="{{'/uploads/files/'.$course_detail->imglink}}" alt="Thumb">
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Curriculum
                                    </a>
                                </li>
                               
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Course Desscription</h4>
                                        <p>
                                            {{$course_detail->text}}
                                       
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <h4>List Of Courses</h4>
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                                @foreach ($categories as $category)
                                                                <li><a href="{{ url('course/index/'.$category->c_id) }}"><strong>{{ $category->c_name }}</strong></a></li>
                                                             @endforeach
                                                                
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                       
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                               
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- End Course Info -->
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
                                        <a href="{{ url('course/index/'.$category->c_id) }}">{{$course_detail->name}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Details -->

   

    <!-- Start Footer 
    ============================================= -->
@endsection