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
                    <h1>Blog Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="blog.php"><i class="fas fa-home"></i> Blog</a></li>
                        <li class="active">Blog Details</li>
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
                <div class="blog-items">
                    <div class="blog-content col-md-8">

                        <div class="single-item">
                            <div class="item">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{'/uploads/files/'.$blog_detail->img_link}}" alt="Thumb">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="content">
                                        <div class="tags share">
                                        </div>
                                        <h3>{{$blog_detail->tittle}}</h3>
                                        <p>
                                            {{$blog_detail->details}}
                                        </p>
                                    
                                        <blockquote>
                                            <p>
                                                He share of first to worse. Weddings and any opinions suitable smallest nay. Houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend 
                                            </p> 
                                        </blockquote>
                                        <p>
                                            Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye. 
                                        </p>

                                        <!-- Start Post Pagination -->
                                        
                                        <!-- End Post Pagination -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Start Blog Comment -->
                  
                        <!-- End Comments Form -->
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
                            </div> <div class="sidebar-item recent-post">
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