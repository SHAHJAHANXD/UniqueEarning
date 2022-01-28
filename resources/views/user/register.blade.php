@extends('user.layout')
@section('content')
<style>
    @media screen and (min-width: 320px) and (max-width: 479px) {
        .breadcrumb-oitila {
            margin-top: 50px;
        }
    }
</style>
<!-- breadcrumb begin -->
<div class="breadcrumb-oitila">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-8">
                <div class="part-txt">
                    <h1>register</h1>
                    <ul>
                        <li>home</li>
                        <li>register page</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-4 d-flex align-items-center">
                <div class="part-img">
                    <img src="assets/img/breadcrumb-img.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- register begin -->
<div class="register">
    <div class="container">
        <div class="reg-body">
            <form action="/add-user" method="POST">
                @csrf
                @if(Session::has('success'))
                <div class="alert alert-success m-4" style="width: 90%;">
                    {{ Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h4 class="sub-title">Personal Information</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" placeholder="First Name*" name="fname">
                                @error('fname')
                                <span class="text-warning">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="text" placeholder="Last Name*" name="lname">
                                @error('lname')
                                <span class="text-warning">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="text" placeholder="Your Email*" name="email">
                        @error('email')
                        <span class="text-warning">{{ $message }}</span>
                        @enderror

                        <input type="password" placeholder="Your Password*" name="password">
                        @error('password')
                        <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios5" value="option2">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <button class="def-btn btn-form" type="submit">Secure Sign Up <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- register end -->
@endsection
