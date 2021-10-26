@extends('layouts.layout')

<!-- Start Banner 
    ============================================= -->
    @section('content')

<div class="banner-area">
    <div id="bootcarousel" class="carousel text-light text-center top-pad text-dark slide animate_text" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootcarousel" data-slide-to="0" class="active"></li>
            <li data-target="#bootcarousel" data-slide-to="1"></li>
        </ol>


        <!-- Wrapper for slides -->
        @foreach($sliders as $slider)
        <div class="carousel-inner carousel-zoom">
            <div class="item active bg-cover" style="background-image: url({{'uploads/files/'.$slider->img_link}});">
                <div class="box-table">
                    <div class="box-cell shadow dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="content">
                                        <h2 data-animation="animated slideInDown">{{$slider->header}}</h2>
                                        <h3 data-animation="animated slideInDown">{{$slider->sub_heading}}</h3>
                                        <p data-animation="animated slideInLeft">
                                            {{$slider->text}}
                                        </p>
                                        <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{'aboutus'}}">{{$slider->btn}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bootcarousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Banner -->

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
            @if ($site->site_key=='welcome')
            <div class="about-items">
                <div class="col-md-6 about-info">
                    <h2>{{$site->site_name}}<span>We're Global Education Academy</span></h2>
                    <blockquote>
                        {{$site->site_value}}
                    </blockquote>
                </div>
                <div class="col-md-6 features text-light">
                    <div class="row">
                        <div class="thumb">
                                <img src=" {{ asset('uploads/files/'.$site->imglink)}}" alt="Thumb">
                            </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- End About -->


<!-- Start Campus Story 
    ============================================= -->
{{-- <div class="campus-story-area video-bg-live text-light text-center bg-fixed" style="background-image: url(front-assets/img/banner/15.jpg);">
    <div class="player" data-property="{videoURL:'DKz_EEoJRs4',containment:'.video-bg-live', showControls:false, autoPlay:true, zoom:0, loop:true, mute:true, startAt:39, opacity:1, quality:'default'}"></div>
    <div class="story-items default-padding shadow dark-hard">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>Campus Story</h2>
                    </div>
                    <div class="content campus-carousel owl-carousel owl-theme">
                        <div class="item">
                            <h4>Buparlin - Campus</h4>
                            <p>
                                Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless.
                            </p>
                            <a href="https://www.youtube.com/watch?v=DKz_EEoJRs4" class="popup-youtube relative light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <div class="item">
                            <h4>Tahumas - Campus</h4>
                            <p>
                                Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless.
                            </p>
                            <a href="https://www.youtube.com/watch?v=DKz_EEoJRs4" class="popup-youtube relative light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Campus Story -->
<div class="progress-area  bg-gray default-padding">
    <div class="container">
        <div class="row">
            <section class="divider parallax layer-overlay" data-bg-img="{{ asset('frontendassets/images/bg/bg6.jpg') }}" data-parallax-ratio="0.7">
                <div class="container pt-70 pb-60">
                  <div class="row">
                       @foreach ($sites as $site)
                       @if ($site->site_key=='progressbar')
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                      <div class="funfact text-center">
                        <i class="fa fa-users mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="{{ $site->site_value }}" class="animate-number text-white mt-0 font-38 font-weight-500">{{ $site->site_value }}</h2>
                        <h4 class="text-white text-uppercase">{{ $site->site_name }}</h4>
                      </div>
                    </div>
                       @endif
            @endforeach
            
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>




<!-- Start Event 
    ============================================= -->
<div class="event-area flex-less">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="blog-area default-padding bottom-less">
                            <div class="container">

                                <div class="site-heading text-center">
                                    <div class="col-md-6">
                                        <h2>Latest News</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="blog-items">
                                    <!-- Single Item -->
                                    @foreach($newses as $news)
                                    <div class="col-md-6 single-item">
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{'uploads/files/'.$news->imglink}}" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                                        </li>
                                                        <li><i class="fas fa-calendar-alt"></i>{{$news->date}}</li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="#">{{$news->title}}</a>
                                                    </h4>
                                                    <a href="{{url('news_detail/'.$news->id)}}"><i class="fas fa-plus"></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Item -->
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="row">
                        <div class="blog-area default-padding bottom-less">
                            <div class="container">

                                <div class="site-heading text-center">
                                    <div class="col-md-6">
                                        <h2>Upcoming Event</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="blog-items">
                                    <!-- Single Item -->
                                    @foreach ($events as $event)
                                    <div class="col-md-6 single-item">
                                        <div class="item">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{'uploads/files/'.$event->img_link}}" alt="Thumb">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <div class="meta">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fas fa-user"></i> Admin</a>
                                                        </li>
                                                        <li><i class="fas fa-calendar-alt"></i>{{$event->date}}</li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <h4>
                                                        <a href="#">{{$event->tittle}}</a>
                                                    </h4>
                                                    <a href="{{url('event_detail/'.$event->id)}}"><i class="fas fa-plus"></i>Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Item -->
                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<!--- end event----->
    
<!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow active-dots bg-gray default-padding bg-cover" style="background-image: url(front-assets/img/shape-bg.png);">
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Why choose us</h2>
                    <p>
                        Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme text-center">
                    <!-- Single Item -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach($whychooseus as $whychooseuses)
                    <div class="item">
                        <div class="icon">
                            <i class="ti-quote-left"></i>
                        </div>
                        <div class="content">
                            
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <img src="front-assets/img/team/1.jpg" alt="Thumb">
                        </div>
                        <div class="author">
                            <h4>{{$whychooseuses->heading}}</h4>
                            <span>{{$whychooseuses->text}}</span>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->
        
@endsection




