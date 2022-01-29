@extends('user.layout')
@section('content')


<!-- register begin -->
<div class="register">
    <div class="container">
        <div class="reg-body">
            <form action="/one-dollar" method="POST">
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
                        <h4 class="sub-title">Payment Information</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="" style="color: white">Your First Name</label>
                                <input type="text" placeholder="First Name*" readonly name="fname" value="{{{ Auth::guard('web')->user()->fname ?? ''}}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="" style="color: white">Your Last Name</label>
                                <input type="text" placeholder="Last Name*" name="lname" readonly value="{{{ Auth::guard('web')->user()->lname ?? ''}}}">
                            </div>
                        </div>
                        <label for="" style="color: white">Your Email</label>
                        <input type="text" placeholder="Your Email*" readonly name="email" value="{{{ Auth::guard('web')->user()->email ?? ''}}}">
                        <label for="" style="color: white">Your Plan</label>
                        <input type="text" placeholder="Your Minimum Deposite *" readonly value="Basic Plan $1" name="minimum">


                        <div>
                        <label for="" style="color: white">Your Deposit Number</label>
                        <input type="text" placeholder="Your Deposite Number*" name="number" value="">
                        @if ($errors->has('number'))
                        <span class="text-warning">{{ $errors->first('number') }}</span>
                        @endif
                        </div>
                        <div>
                        <label for="" style="color: white">Your Transaction ID</label>
                        <input type="text" placeholder="Transaction ID*" name="trx" value="">
                        @if ($errors->has('trx'))
                        <span class="text-warning">{{ $errors->first('trx') }}</span>
                        @endif
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios5" value="option2">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <button class="def-btn btn-form" type="submit">Submit <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- register end -->
@endsection
