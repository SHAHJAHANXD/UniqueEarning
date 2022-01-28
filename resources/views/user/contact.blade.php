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
                    <h1>contact</h1>
                    <ul>
                        <li>home</li>
                        <li>contact page</li>
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

<!-- contact begin -->
<div class="contact contact-page" id="contact">
    <div class="container container-contact">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title">
                    <span class="sub-title">
                        Contact Us
                    </span>
                    <h2>
                        Get in touch<span class="special"> with us</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="bg-tamim">
            <div class="row justify-content-around">
                <div class="col-xl-6 col-lg-6 col-sm-10 col-md-6">
                    <div class="part-form">

                        <form action="/contact" method="POST">
                            @csrf
                            @if(Session::has('success'))
                            <div class="alert alert-success m-4" style="width: 90%;">
                                {{ Session::get('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="    margin-top: -13px;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <input type="text" placeholder="Your Name" name="name">
                            @error('name')
                            <span class="text-warning">{{ $message }}</span>
                            @enderror
                            <input type="text" placeholder="Your Email" name="email">
                            @error('email')
                            <span class="text-warning">{{ $message }}</span>
                            @enderror
                            <textarea placeholder="Write to Us..." name="message"></textarea>
                            @error('message')
                            <span class="text-warning">{{ $message }}</span>
                            @enderror
                            <button class="submit-btn def-btn" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                    <div class="part-address">
                        <div class="addressing" style="    color: white;">
                            <div class="single-address">
                                <h4>Our Office</h4>
                                <p> <i class="fa fa-home"></i> - 1941 Romines Mill Road
                                    Irving, TX 75062<br />Texas, United States</p>
                            </div>
                            <div class="single-address">
                                <h4>Email</h4>
                                <p> <i class="fa fa-home"></i> - earningunique08@gmail.com</p>
                            </div>
                            <div class="single-address">
                                <h4>Phone</h4>
                                <p><i class="fa fa-phone"></i> - +92 300-000-0000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact end -->

<!-- map begin -->

<!-- map end -->
@endsection
