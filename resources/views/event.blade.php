@extends('layouts.layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image:url({{'uploads/files/'.$site->imglink}}) ;">
   @endif
   @endforeach
   <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12"><br><br>
                    <h1>Event</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Event</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    
    <!---search section--->
    <div class="blog-area single" >
        <div class="container">
            <div class="row">
                <div class="blog-items " >
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4" >
                        <aside>
                            <div class="sidebar-item search" style="border:none;">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
                            
    <!-- Start Event 
    ============================================= -->
    <div class="event-area flex-less ">
        <div class="container">
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    @foreach($events as $event)
                    <div class="col-md-6 col-sm-6 equal-height">
                        <div class="item">
                        <a href="{{url('event_detail/'.$event->id)}}">
                            <div class="thumb">
                                <img src="{{'uploads/files/'.$event->img_link}}" alt="Thumb">
                            </div>
                            <div class="info">
                                <div class="info-box">
                                    <div class="date" style="margin-top: 5px; margin-left:10px;">
                                        {{$event->date}}
                                    </div>
                                    <div class="content" >
                                        <h4 style="margin-top: 7px;" >
                                            {{$event->tittle}}</a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i>{{$event->time}}</li>
                                            <li><i class="fas fa-map-marked-alt"></i>{{$event->address}}</li>
                                        </ul>
                                        <div class="bottom" style="margin-bottom: 10px;">
                                            <a href="{{url('event_detail/'.$event->id)}}" class="btn circle btn-dark border btn-sm">
                                                <i class="fas fa-chart-bar"></i> READ MORE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Event -->
@endsection