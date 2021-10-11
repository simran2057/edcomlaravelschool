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
                    <h1>News Detail</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li class="active">News Details</li>
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
                                        <img src="{{'/uploads/files/'.$news_detail->imglink}}" alt="Thumb">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fas fa-calendar-alt"></i> {{$news_detail->date}}</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="content">
                                        <h3>{{$news_detail->title}}</h3>
                                        <p>
                                            {{$news_detail->text}}
                                        </p>
                                        <blockquote>
                                            <p>
                                                {{$news_detail->details}}
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
                            <div class="sidebar-item search">
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
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent News</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="info">
                                            <a href="{{url('news_detail/'.$news_detail->id)}}">{{$news_detail->title}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$news_detail->date}}</span> 
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
    @endsection