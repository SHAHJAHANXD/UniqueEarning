<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: aliceblue
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px
}

h4 {
    letter-spacing: -1px;
    font-weight: 400
}

.img {
    width: 70px;
    height: 70px;
    border-radius: 6px;
    object-fit: cover
}

#img-section p,
#deactivate p {
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
    font-size: 14px
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #777;
    padding-left: 3px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}

select {
    display: block;
    width: 100%;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 40px;
    padding: 5px 10px
}

select:focus {
    outline: none
}

.button {
    background-color: #fff;
    color: #0779e4
}

.button:hover {
    background-color: #0779e4;
    color: #fff
}

.btn-primary {
    background-color: #0779e4
}

.danger {
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404;
    color: #fff
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}
@media screen and (min-width: 1801px) and (max-width: 2560px) {
        .profilee{
            margin-top: 100px;
        }
    }
    @media screen and (min-width: 1445px) and (max-width: 1800px) {
        .profilee{
            margin-top: 120px;
        }
    }
@media screen and (min-width: 1024px) and (max-width: 1440px) {
        .profilee{
            margin-top: 120px;
        }
    }
    @media screen and (min-width: 768px) and (max-width: 1023px) {
        .profilee{
            margin-top: 250px !important;
        }
    }
    @media screen and (min-width: 480px) and (max-width: 767px) {
        .mt-sm-5 {
    margin-top: 5rem !important;
}

.profilee{
            margin-top: 120px !important;
        }
    }

@media screen and (min-width: 320px) and (max-width: 479px) {
        .profilee{
            margin-top: 80px;
        }
    }
</style>
@extends('user.layout')
@section('content')
<body>

    <div class="wrapper bg-white profilee">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        @if(Session::has('Success'))
        <div class="alert alert-success m-4" style="width: 90%;">
            {{ Session::get('Success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form class="login100-form validate-form" action="/add-user/{{$user->id}}" method="POST">
            @csrf
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6">
                     <label for="firstname">First Name</label>
                     <input type="text" class="bg-light form-control" placeholder="Steve" value="{{{ Auth::guard('web')->user()->fname ?? ''}}}" name="fname">

                    </div>
                <div class="col-md-6 pt-md-0 pt-3">
                     <label for="lastname">Last Name</label>
                     <input type="text" class="bg-light form-control" placeholder="Smith" value="{{{ Auth::guard('web')->user()->lname ?? ''}}}" name="lname">
                     </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="email">Email Address</label>
                     <input type="text" class="bg-light form-control" placeholder="steve_@email.com" value="{{{ Auth::guard('web')->user()->email ?? ''}}}" name="email" readonly>
                     </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <label for="phone">Phone Number</label>
                     <input type="tel" class="bg-light form-control" placeholder="+1 213-548-6015" value="{{{ Auth::guard('web')->user()->number ?? ''}}}" name="number">
                     @if ($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                    @endif
                    </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6">
                     <label for="country">Country</label>
                      <select name="country" id="country" class="bg-light"  >
                        <option>{{{ Auth::guard('web')->user()->country ?? ''}}}</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="India" >India</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                        <option value="UAE">UAE</option>
                    </select>
                    @if ($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                 </div>
                <div class="col-md-6 pt-md-0 pt-3" id="lang">
                    <label for="language">City</label>
                    <input type="text" class="bg-light form-control" placeholder="Enter City" value="{{{ Auth::guard('web')->user()->city ?? ''}}}" name="city">
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                </div>
            </div>
            <div class="py-3 pb-4 border-bottom">
                <input class="btn btn-primary mr-3" type="submit" value="Save">
                 <a class="btn border button" href="/">Cancel</a>
            </div>
        </form>
        @if(Auth::guard('web')->check() === true)
             @if(Auth::guard('web')->user()->stats == '1')
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                <div> <b>Add Referal</b>
                    <p>Add Refereal Number and get profit.....</p>
                </div>
                <div class="ml-auto"> <a class="btn danger" href="/user-reference">Add Referal</a> </div>
            </div>
            @endif
            @endif
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    </script>

</body>
@endsection
</html>
