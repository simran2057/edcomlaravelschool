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
                    <h1>Event Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="event.php"><i class="fas fa-home"></i> Event</a></li>
                        <li class="active">Event Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">

                        <div class="single-item">
                            <div class="item">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                                   
                                    <a href="#">
                                        <img src="{{'/uploads/files/'.$event_detail->img_link}}" alt="Thumb">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="meta">
                                    <ul>
                                            <li><i class="fas fa-clock"></i>{{$event_detail->time}}</li>
                                            <li><i class="fas fa-map-marked-alt"></i>{{$event_detail->address}}</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="content">
                                        <h3>{{$event_detail->tittle}}</h3>
                                        <p>
                                            {{$event_detail->details}}
                                        <blockquote>
                                            <p>
                                                He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend 
                                            </p> 
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Events</h4>
                                </div>
                                @foreach($events as $event)
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="{{'/uploads/files/'.$event->img_link}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="blog.php">{{$event->tittle}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$event->date}}</span> - By <a href="#">Author</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End event -->

@endsection

