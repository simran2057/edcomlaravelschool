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
                <div class="col-lg-12 col-md-12">
                    <h1>Our Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
    ============================================= -->
    <div id="portfolio" class="portfolio-area default-padding">
        <div class="container">
            <div class="portfolio-items-area text-center">
                <div class="row">
                    <div class="col-md-12 portfolio-content">
                        <div class="mix-item-menu active-theme">
                            <a class="active" data-filter="*"></a>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                    @foreach ($gallerycategories as $gallerycategory)
                                    <a href="{{ $gallerycategory->g_name }}" class="" data-filter=".{{ $gallerycategory->g_name }}">{{ $gallerycategory->g_name }}</a>
                                    {{-- <button data-filter=".campus">Campus</button>
                                    <button data-filter=".teachers">Teachers</button>
                                    <button data-filter=".education">Education</button>
                                    <button data-filter=".ceremony">Ceremony</button>
                                    <button data-filter=".students">Students</button> --}}
                                    @endforeach
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery masonary text-light">
                            <div id="portfolio-grid" class="portfolio-items col-3">
                                @foreach ($galleries as $gallery)
                                @foreach ($gallerycategories as $gallerycategory)
                                @if ($gallerycategory->g_id==$gallery->g_id)
                                <div class="gallery-item {{ $gallerycategory->g_name }}">
                                        @endif
                                        @endforeach
                                        <div class="pf-item ceremony students">
                                            <div class="photo">
                                                <img src="{{'uploads/files/'.$gallery->img_link}}" alt="thumb">
                                            
                                            </div>
                                       </div>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
 @endsection