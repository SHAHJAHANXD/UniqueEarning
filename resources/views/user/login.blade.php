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
                    <h1>login</h1>
                    <ul>
                        <li>home</li>
                        <li>login page</li>
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

<!-- login begin -->
<div class="login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-7 col-sm-9">
                <div class="form-area">
                    <div class="row no-gutters">
                        <div class="col-xl-6 col-lg-6">
                            <div class="login-form">
                                <form action="/login-user" method="POST">
                                    @csrf
                                    @if(Session::has('error'))
                                    <div class="alert alert-danger m-4" style="width: 90%;">
                                        {{ Session::get('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                        @if ($errors->has('email'))
                                        <span class="text-warning">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                        @if ($errors->has('password'))
                                        <span class="text-warning">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group form-check">

                                        <button class="btn-form" type="submit">Submit</button>
                                    </div>
                                </form>
                                <div class="other-option">
                                    <a href="/register">register now</a>
                                    <a href="/forget-password">forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-xl-block d-lg-block d-none">
                            <div class="blank-space"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login end -->

@endsection
