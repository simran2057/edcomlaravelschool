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
                <h1>Examination Notice</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>

                    <li class="active">Examination </li>
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
                    <div class="event-items">
                        <!-- Single Item -->
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        @foreach ($notices as $notice)
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item">
                               
                                <div class="info">
                                    <div class="info-box">
                                        
                                        <div class="content">
                                            <h4>
                                                <a href="{{url('notice_detail/'.$notice->id)}}">{{ $notice->heading }}</a>
                                            </h4>
                                            <ul>
                                                <li><i class="fas fa-clock"></i>{{ $notice->started}} to {{$notice->ended}}</li>
                                                 <div class="date">
                                            <strong>{{ $notice->date}}</strong> 
                                        </div>
                                            </ul>
                                            
                                            <div class="bottom">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    {{$notices->links()}}
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
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
                                <form action="{{ route('noticeSearch') }}" method="GET">
                                    <input type="text" class="form-control"  name="search" required />
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
                                        <a href="{{ url('notice_detail') }}">{{$notice->heading}}</a>
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
@endsection