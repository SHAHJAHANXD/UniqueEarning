@extends('admin.layout')
@section('content')
<div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="single_element">
                        <div class="quick_activity">
                                <div class="main_content_iner ">
                                    <div class="container-fluid plr_30 body_white_bg pt_30">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="quick_activity_wrap">
                                                <a href="/admin/users">
                                                    <div class="single_quick_activity">
                                                        <h4>Total Users</h4>
                                                        <h3># <span class="">{{$user}}</span> </h3>
                                                    </div>
                                                </a>
                                                <a href="/admin/withdraw-requests">
                                                    <div class="single_quick_activity">
                                                        <h4>Total Withdraws</h4>
                                                        <h3># <span class="">{{$withdraw}}</span> </h3>
                                                    </div>
                                                </a>
                                                
                                                <a href="/admin/request-applications">
                                                    <div class="single_quick_activity">
                                                        <h4>Investment Requests</h4>
                                                        <h3># <span class="">{{$investment ?? '0'}}</span> </h3>
                                                    </div>
                                                </a>
                                                <a href="/admin/user-messages">
                                                    <div class="single_quick_activity">
                                                        <h4>User Messages</h4>
                                                        <h3># <span class="">{{$message ?? '0'}}</span> </h3>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
