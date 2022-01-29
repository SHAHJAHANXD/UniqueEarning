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
                            @if (Session::has('Success'))
                                <div class="alert alert-success m-4" style="width: 90%;">
                                    {{ Session::get('Success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <hr>
                            <?php

                                $url = url('admin/add-adds');

                            ?>
                            <form action="{{ url($url) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="input-1">Link</label>
                                            <input type="text" class="form-control" id="input-1" placeholder="Enter Link"
                                                name="link" value="{{ $user->email ?? '' }}">
                                            @if ($errors->has('link'))
                                                <span class="text-danger">{{ $errors->first('link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>
                                        Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 @endsection
