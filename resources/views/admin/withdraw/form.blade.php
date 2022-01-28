@extends('admin.layout')
@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row mt-3">

            <div class="col-lg-6 offset-3 ">
                <div class="card">
                    <div class="card-body col-12">
                        <div class="card-title">Price Form</div>
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
                            $url = url('admin/price/' . $user->id ?? '');
                        } else {
                            $url = url('admin/price');
                        }
                        ?>
                        <form action="{{url($url)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Map</label>
                                        <input type="text" class="form-control" id="input-1" placeholder="Enter Map" name="map" value="{{$user->map ?? ''}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-1">Date</label>
                                        <input type="date" class="form-control" id="input-1" placeholder="Enter Date" name="date" value="{{$user->date ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label for="input-1">Room ID</label>
                                <input type="numbers" class="form-control" id="input-1" placeholder="Enter Room ID" name="r_id" value="{{$user->r_id ?? ''}}">
                            </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label for="input-1">Room Password</label>
                                <input type="text" class="form-control" id="input-1" placeholder="Enter Room Password" name="password" value="{{$user->password ?? ''}}">
                            </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label for="input-1">Time</label>
                                <input type="text" class="form-control" id="input-1" placeholder="Enter Time" name="time" value="{{$user->time ?? ''}}">
                            </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label for="input-1">Rules</label>
                                <input type="text" class="form-control" id="input-1" placeholder="Enter Rules" name="rules" value="{{$user->rules ?? ''}}">
                            </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label for="input-1">Details</label>
                                <input type="text" class="form-control" id="input-1" placeholder="Enter Details" name="details" value="{{$user->details ?? ''}}">
                            </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                <div class="form-group">
                                <label for="input-1">Winner</label>
                                <input type="text" class="form-control" id="input-1" placeholder="Enter Winner Name" name="name" value="{{$user->name ?? ''}}">
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