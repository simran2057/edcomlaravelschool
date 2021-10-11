<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark inc-border text-light">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 address-info text-left">
                    <div class="info">
                        <ul>
                         
                            <li>
                                @foreach ($sites as $site)
     @if ($site->site_key=='contact')
                                <i class="fas fa-phone"></i> Help Line: <strong>{{$site->site_value}}</strong>
                                @endif
                                @endforeach
                            </li>
                            
                            <li>
                                @foreach ($sites as $site)
                                @if ($site->site_key=='email')
                                <i class="fas fa-envelope"></i>{{$site->site_value}}
                                @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <!-- End Header Top -->

     <!-- Header 
    ============================================= -->
    <header>
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">            

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
@foreach ($sites as $site)
     @if ($site->site_key=='logo')
        <a class="navbar-brand" href=""><img src="{{asset('uploads/files/'.$site->imglink)}}" class="logo" alt="Logo"></a>
    @endif
@endforeach
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="dropdown">
                                    <a href="{{url('index')}}">Home</a>
                                  
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('aboutus')}}">About Us</a></li>
                                        <li><a href="{{url('messages')}}">Message</a></li>
                                        <li><a href="{{url('planning')}}">Planning</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Examination</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('notices')}}">Notice</a></li>
                                        <li><a href="{{url('results')}}">Result</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses</a>
                                    <ul class="dropdown-menu">
@foreach ($categories as $category)
    <li><a href="{{ url('course/index/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
 @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{url('teachers')}}">Teachers</a>
                                  
                                </li>
                              
                              
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('galleries')}}">Gallery</a></li>
                                        <li><a href="{{url('events')}}">Events</a></li>
                                        <li><a href="{{url('blogs')}}">Blog</a></li>
                                        <li><a href="{{url('newses')}}">News</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('contacts')}}">contact</a>
                                </li>
                                 <li>
                                    <a href="{{url('admissions')}}">Admission</a>
                                 </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>   
                    
                </nav>
                <!-- End Navigation -->
                
            </div>
        </div>
    </header>
    <!-- End Header -->