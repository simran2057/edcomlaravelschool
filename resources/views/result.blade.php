@extends('layouts.layout')
@section('content')

  <!-- Start Breadcrumb 
    ============================================= -->
    @foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12"><br><br>
                    <h1>Examination Result</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('index')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Examination Result</li>
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
                        
                        <div class="event-items">
                            @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                               @foreach($results as $result)
                        <!-- Single Item -->
                        <div class="item">
                           
                            <div class="col-md-7 info">
                                <div class="info-box">
                                  
                                    <div class="content">
                                        <h4>
                                            <a href="{{$result->link}}">{{$result->name}}</a>
                                        </h4>
                                        <ul>
                                             <div class="date">
                                        <strong>{{$result->date}}</strong>
                                    </div>
                                           
                                        </ul>
                                      
                                        <div class="bottom">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->
                    </div>
                        <!-- End Blog Items -->

                        <!-- Pagination -->
                        <div class="row">
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
                                    <h4>Recent Post</h4>
                                </div>
                                @foreach ($results as $result)
                                <ul>
                                    <li>
                                        
                                        <div class="info">
                                            <a href="{{$result->link}}">{{$result->name}}</a>
                                            <div class="meta-title">
                                                <span class="post-date">{{$result->date}}</span>
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