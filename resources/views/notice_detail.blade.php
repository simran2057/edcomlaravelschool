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
                    <br> <br>
                    <h1>Notice Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        
                        <li class="active">Notice Details</li>
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
                               
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                                            </li>
                                            <li><i class="fas fa-calendar-alt"></i>{{$notice_detail->date}}</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="content">
                                       
                                        <h3>{{$notice_detail->heading}}</h3>
                                        <p>
                                            {{$notice_detail->detail}}
                                            {{-- Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.  --}}
                                        </p>
                                       

                                        <!-- Start Post Pagination -->
                                        
                                        <!-- End Post Pagination -->
                                        
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
                                    <h4>Recent Notices</h4>
                                </div>
                                @foreach ($notices as $notice)
                                <ul>
                                    <li>
                                        <div class="info">
                                            <a href="{{url('notice_detail/'.$notice->id)}}">{{$notice->heading}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$notice->date}}</span>
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

    <!-- Start Footer 
@endsection