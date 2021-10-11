@extends('layouts.layout')
@section('content')
    

@foreach ($sites as $site)
@if ($site->site_key=='bgimage')
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'uploads/files/'.$site->imglink}});">
    @endif
    @endforeach  
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <br><br>
                <h1>About-us</h1>
                <ul class="breadcrumb">
                    <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="active">Aboutus</a></li>
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
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @foreach ($sites as $site)
                @if ($site->site_key=='welcome')
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2> {{$site->site_name}}! <span>We're Global Education Academy</span></h2>
                        <blockquote>
                            {{$site->site_value}}
                            {{-- A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad. --}}
                        </blockquote>
                    </div>
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src=" {{ asset('uploads/files/'.$site->imglink)}}" alt="Thumb">
                                </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="about-area">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="about-items">
                    @foreach ($sites as $site)
                    @if ($site->site_key=='objective')
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src="{{ asset('uploads/files/'.$site->imglink)}}" alt="Thumb">
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 about-info">
                        <h2>{{ $site->site_name }}</h2>
                        <blockquote>
                            {{ $site->site_value }}
                            {{-- A man who has never gone to school may steal from a freight car. --}}
                        </blockquote>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @foreach ($sites as $site)
                @if ($site->site_key=='missionaboutus')
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2> {{$site->site_name}}</h2>
                        <blockquote>
                            {{$site->site_value}}
                            {{-- A man who has never gone to school may steal from a freight car; but if he has a university education, he may steal the whole railroad. --}}
                        </blockquote>
                    </div>
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src=" {{ asset('uploads/files/'.$site->imglink)}}" alt="Thumb">
                                </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="about-area">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="about-items">
                    @foreach ($sites as $site)
                    @if ($site->site_key=='visionaboutus')
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src="{{ asset('uploads/files/'.$site->imglink)}}" alt="Thumb">
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 about-info">
                        <h2>{{ $site->site_name }}</h2>
                        <blockquote>
                            {{ $site->site_value }}
                            {{-- A man who has never gone to school may steal from a freight car. --}}
                        </blockquote>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection