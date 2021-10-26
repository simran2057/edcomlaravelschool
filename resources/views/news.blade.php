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
                    <h1>News</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">News</a></li>
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

                        <div class="content-items">
                            @foreach($newses as $news)
                            <!-- Single Item -->
                            <div class="single-item">
                                <div class="item">
                                    <div class="info">
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i>{{$news->date}}</li>
                                            </ul>
                                        </div>
                                        <div class="thumb">
                                            <a href="{{url('news_detail/'.$news->id)}}">
                                                <img src="{{'/uploads/files/'.$news->imglink}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h4>
                                                <a href="{{url('news_detail/'.$news->id)}}">{{$news->title}}</a>
                                            </h4>
                                            <p>
                                                {{$news->text}}
                                            </p>
                                            <a href="{{url('news_detail/'.$news->id)}}"><i class="fas fa-plus"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                                @endforeach
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            {{$newses->links()}}
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- End Blog Items -->

                        <!-- Pagination -->
                        
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form action="{{ route('newsSearch') }}" method="GET">
                                        <input type="text" class="form-control"  name="search" required />
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent News</h4>
                                </div>
                                @foreach($newses as $news)
                                <ul>
                                    <li>
                                        <div class="info">
                                            <a href="{{url('news_detail/'.$news->id)}}">{{$news->title}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$news->date}}</span> 
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
    <!-- End Blog -->
    @endsection