@extends('admin.layout')
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">

            <div class="col-lg-6 offset-3 ">
                <div class="card">
                    <div class="card-body col-12">
                        <div class="card-title">Add Payments Form</div>
                        @if(Session::has('Success'))
                        <div class="alert alert-success m-4" style="width: 90%;">
                            {{ Session::get('Success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <hr>
                        <?php
                        if (isset($user->id) && $user->id != 0) {
                            $url = url('admin/priceee/' . $user->id ?? '');
                        } else {
                            $url = url('admin/priceee');
                        }
                        ?>
                        <form action="{{url($url)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Email</label>
                                        <input type="text" class="form-control" id="input-1" placeholder="Enter Email" name="email" value="{{$user->email ?? ''}}">
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Amount</label>
                                        <input type="number" min="0" class="form-control" id="input-1" placeholder="Enter Total Amount" name="amount" value="{{$user->amount ?? ''}}">
                                        @if ($errors->has('amount'))
                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection