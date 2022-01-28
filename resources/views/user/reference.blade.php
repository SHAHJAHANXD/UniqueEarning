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
        .profilee {
            margin-top: 150px;
        }
    }

    @media screen and (min-width: 1445px) and (max-width: 1800px) {
        .profilee {
            margin-top: 120px;
        }
    }

    @media screen and (min-width: 1024px) and (max-width: 1440px) {
        .profilee {
            margin-top: 140px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 1023px) {
        .profilee {
            margin-top: 130px !important;
        }
    }

    @media screen and (min-width: 480px) and (max-width: 767px) {
        .mt-sm-5 {
            margin-top: 5rem !important;
        }

        .profilee {
            margin-top: 120px !important;
        }
    }

    @media screen and (min-width: 320px) and (max-width: 479px) {
        .profilee {
            margin-top: 80px;
        }
    }

</style>
@extends('user.layout')
@section('content')

    <body>
        <div class="wrapper bg-white profilee">
            <h4 class="pb-4 border-bottom">Add Account Reference</h4>
            @if(Session::has('error'))
        <div class="alert alert-danger m-4" style="width: 90%;">
            {{ Session::get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
            <form class="login100-form validate-form" action="/user-reference" method="POST">
                @csrf
                <div class="py-2">
                    <div class="row">
                        <div class="col-12">
                            <label for="firstname">Reference Email</label>
                            <input type="text" class="bg-light form-control" placeholder="Enter Referal Email" value="" name="email">
                            <input type="text" class="bg-light form-control" placeholder="Number" hidden value="1" name="ref">
                        </div>
                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <input class="btn btn-primary mr-3" type="submit" value="Save">
                        <a class="btn border button" href="/">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
    </body>
@endsection

</html>
