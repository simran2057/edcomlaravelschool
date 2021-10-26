@extends('layouts.layout')
@section('content')

    <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'/uploads/files/'.$site->imglink}});">
        @endif
        @endforeach  
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Blog</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="active">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="blog-items">
                        <div class="blog-content col-md-8">
                            
                            <div class="content-items">
                                
                                <!-- Single Item -->
                                @foreach ($blogs as $blog)
                            <div class="single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{url('blog_detail/'.$blog->id)}}">
                                            <img src="{{'/uploads/files/'.$blog->img_link}}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="content">
                                            <h4>
                                                <a href="{{url('blog_detail/'.$blog->id)}}">{{$blog->tittle}}</a>
                                            </h4>
                                            <p>
                                                {{$blog->text}}
                                            </p>
                                            <a href="{{url('blog_detail/'.$blog->id)}}"><i class="fas fa-plus"></i> Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End Single Item -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        {{$blogs->links()}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- End Blog Items -->

                        <!-- Pagination -->
                        {{-- <div class="row">
                            <div class="col-md-12 pagi-area">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Start Sidebar -->
                    <div class="sidebar col-md-4">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="title">
                                    <h4>Search</h4>
                                </div>
                                <div class="sidebar-info">
                                    <form action="{{ route('blogSearch') }}" method="GET">
                                        <input type="text" class="form-control"  name="search" required />
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Blogs</h4>
                                </div>
                                @foreach($blogs as $blog)
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="{{url('blog_detail/'.$blog->id)}}">
                                                <img src="{{'/uploads/files/'.$blog->img_link}}" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="{{url('blog_detail/'.$blog->id)}}">{{$blog->tittle}}</a>
                                            
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

    <!-- Start Footer 
    ============================================= -->
 @endsection