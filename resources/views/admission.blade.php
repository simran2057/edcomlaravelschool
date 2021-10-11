@extends('layouts.layout')
@section('content')
    
@foreach ($sites as $site)
    @if ($site->site_key=='bgimage')
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url({{'uploads/files/'.$site->imglink}});">
        @endif
        @endforeach  
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br><br>
                    <h1>Admisson</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{'index'}}"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="active">Admission</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

<div class="login-area " style="margin-top: 190px; margin-bottom:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="{{route('admission.store')}}" method="POST" enctype="multipart/form-data" id="login-form" class="white-popup-block">
                    @csrf
                    <div class="login-custom">
                        <div class="heading">
                            <h4><i class="fas fa-edit"></i> Admission Now</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="name" type="text" placeholder="Enter Name" required="" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email" value="" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Phone/Tel <small>*</small></label>
                                    <input name="phone" class="form-control required email" value="" type="text" placeholder="Enter Phone ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Country<small>*</small></label>
                                        <select name="address" class="form-control required">
                                            <option value="Nepal">Nepal</option>
                                            <option value="India">India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label>Skill</label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="c++" checked>
                                            C++
                                        </label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="python">
                                            Python
                                        </label>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="skill" id="" value="Html/css">
                                            Html/css
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label>Gender</label><br>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" id="" value="Male" class="custom-control-input">Male
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"></span>
                                    </label><br>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="gender" id="" value="Female" class="custom-control-input">Female
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description"></span>
                                    </label>

                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Ward no.<small>*</small></label>
                                        <select name="ward_no" class="form-control required">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message <small>*</small></label>
                                <textarea name="message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status<small>*</small></label>
                                        <select name="status" class="form-control required">
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
@endsection