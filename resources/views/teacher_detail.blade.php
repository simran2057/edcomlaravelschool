@extends('layouts.layout')
@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image:url({{'/uploads/files/'.$site->imglink}}) ;">
   @endif
   @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Teacher Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Teacher Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Advisor Details 
    ============================================= -->
    <div class="advisor-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="advisor-info">
                    
                    <!-- Start Thumbnail -->
                    <div class="col-md-5 " >
                        <div class="thumb">
                            <img src="{{'/uploads/files/'.$teacher_detail->img_link}}" alt="Thumb">
                            <div class="info ">
                                <h4>{{$teacher_detail->name}}</h4>
                                <p>
                                    {{$teacher_detail->post}}
                                </p>

                            </div>
                        </div>
                    </div>
                    
                    <!-- End Thumbnail -->

                    <!-- Start Content -->
                    <div class="col-md-7 content" s>
                        
                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                          
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h3><strong>Teacher Details:</strong></h3>
                                        <p>
                                            {{$teacher_detail->details}}
                                        </p>
                                        <h3><strong>Experience:</strong></h3>
                                        <p>{{$teacher_detail->experience}}</p>
                                        <h3><strong>Information:</strong></h3>
                                        <i class="fas fa-envelope"></i> <strong>Address:{{$teacher_detail->address}}</strong> <br>
                                        <i class="fas fa-phone"></i> <strong>Contact-No:{{$teacher_detail->contact}}</strong>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                               
                                
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->

                        </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Advisor Details -->
 @endsection