@extends('layouts.layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='message from principal')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image:url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Message</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Message</li>
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
                @if ($site->site_key=='message from principal')
                <div class="about-items">
                    <div class="col-md-6 about-info">
                        <h2 style="font-size: 35px;">{{$site->site_name}}</h2>
                        <p>
                            {{$site->site_value}}
                            </p>
                            <br><br>
                              <div class="about-items">
                                @foreach ($sites as $site)
                                @if ($site->site_key=='principlename')
                                <span style="color: red;">{{$site->site_value}}</span><br>
                                <span style="color: red;">{{$site->site_name}}</span>
                                @endif
                                @endforeach
                              </div>
                    </div>
                    @foreach ($sites as $site)
                    @if ($site->site_key=='message from principal')
                    <div class="col-md-6 features text-light">
                        <div class="row">
                            <div class="thumb">
                                    <img src="{{'uploads/files/'.$site->imglink}}" alt="Thumb">
                                </div>
                            </div>
                    </div>
                    @endif
                @endforeach
                </div>
                
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="about-area">
        <div class="container">
            <div class="row">
                @foreach ($sites as $site)
                @if ($site->site_key=='msgfrmdean')
                <div class="about-items">
                    <div class="col-md-6 features text-light">
                            <div class="row">
                                <div class="thumb">
                                        <img src="{{'uploads/files/'.$site->imglink}}" alt="Thumb">
                                    </div>
                            </div>
                        </div>
                    <div class="col-md-6 about-info">
                        <h2 style="font-size: 35px;">{{$site->site_name}}</h2>
                        <p>
                            {{$site->site_value}}
                            </p>
                            <br><br>
                            <div class="about-items">
                                @foreach ($sites as $site)
                                @if ($site->site_key=='deanname')
                                <span style="color: red;">{{$site->site_value}}</span><br>
                                <span style="color: red;">{{$site->site_name}}</span>
                                @endif
                                @endforeach
                              </div>
                    </div>
                    
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
  <br><br>
  @endsection