@extends('layouts.layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='planning')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Planning</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                @foreach ($sites as $site)
                @if ($site->site_key=='planning')
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2>{{$site->site_name}}<span>We're Global Education Academy</span></h2>
                        <blockquote>
                            {{$site->site_value}}
                            {{-- A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad. --}}
                        </blockquote>
                    </div>
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src="{{'uploads/files/'.$site->imglink}}" alt="Thumb">
                                </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>

        <!-- Start Advisor 
    ============================================= -->
    <div class="advisor-area bg-gray default-padding bottom-less bg-cover">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>New Programs</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row multi-row-clearfix">
                <div class="advisor-items text-light text-center">
                    <!-- Single item -->
                    <div class="col-md-12">
                        <div class="owl-carousel-4col">
                            @foreach ($sites as $site)
                            @if ($site->site_key=='program')
                            <div class="col-md-3">
                                <div class="item">
                                    <a href="programdetails.php">
                                     <div class="thumb">
                                             <img src="{{'uploads/files/'.$site->imglink}}" alt="Thumb">
                                             
                                         </div>
                                    </a>
                                     <div class="info">
                                        <a href="programdetails.php"><span>{{$site->site_name}}</span></a>
                                     </div>
                                 </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    {{-- <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="programdetails.php">
                                <div class="thumb">
                                        <img src="assets/img/advisor/2.jpg" alt="Thumb">
                                        
                                    </div>
                            </a>
                            <div class="info">
                                <a href=""><span>Program Tittle</span></a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Single item -->
                    <!-- Single item -->
                    {{-- <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="programdetails.php">
                                <div class="thumb">
                                        <img src="assets/img/advisor/3.jpg" alt="Thumb">
                                        
                                    </div>
                            </a>
                            <div class="info">
                                <a href=""><span>Program Tittle</span></a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Single item -->
                    <!-- Single item -->
                    {{-- <div class="col-md-3 col-sm-6 single-item">
                        <div class="item">
                            <a href="programdetails.php">
                                <div class="thumb">
                                        <img src="assets/img/advisor/4.jpg" alt="Thumb">
                                        
                                    </div>
                            </a>
                            <div class="info">
                                <a href=""><span>Program Tittle</span></a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor -->
    @endsection