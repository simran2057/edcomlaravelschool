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
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Info
    ============================================= -->
    <div class="contact-info-area default-padding">
        <div class="container">
        <div class="row contact-bottom-info">
                <!-- Start Maps & Contact Form -->
                <div class="maps-form">
                    <div class="col-md-6 maps">
                        <h4>Our Location</h4>
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 form">
                        <div class="heading">
                            <h4>Contact Us</h4>
                        </div>
                        <form action="{{ route('message.store') }}" method="POST" class="contact-form" enctype="multipart/form-data" id="contactform" name="contactform" >
                            @csrf
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="contact" placeholder="Phone" type="number">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="details" placeholder="Message*" rows="6" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Maps & Contact Form -->
                <!-- Job Form Validation-->
                        <script type="text/javascript">
                            $("#job_apply_form").validate({
                        submitHandler: function(form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', false).data("loading-text"));
                        $(form).ajaxSubmit({
                            dataType: 'json',
                            success: function(data) {
                            if (data.status == 'true') {
                                $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function() {
                                $(form_result_div).fadeOut('slow')
                            }, 6000);
                            }
                        });
                        }
                    });
                        </script>

        </div>
            <br><br>
            <!-- Start Contact Info -->
            <div class="contact-info text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @foreach ($sites as $site)
                        @if ($site->site_key=='contact')
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info">
                                <h4>Call Us</h4>
                                <span>{{$site->site_value}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-4 col-sm-4">
                        @foreach ($sites as $site)
                        @if ($site->site_key=='location')
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info">
                                <h4>Address</h4>
                                <span>{{$site->site_value}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-4 col-sm-4">
                        @foreach ($sites as $site)
                        @if ($site->site_key=='email')
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info">
                                <h4>Email Us</h4>
                                <span>{{$site->site_value}}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End Contact Info -->
            
           
        </div>
    </div>
    <!-- End Contact Info -->
@endsection