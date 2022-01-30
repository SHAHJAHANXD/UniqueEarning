@extends('user.layout')
@section('content')
<style>
    @media screen and (min-width: 320px) and (max-width: 479px)
    {
        .okayyy
        {
            font-size: 19px;
        }
    }
</style>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="pricing-plan" id="price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title">
                    <span class="sub-title" style="    margin-top: 20px !important;">
                           User Dashboard
                        </span>
                    <h2>
                        {{{ Auth::guard('web')->user()->fname ?? ''}}} {{{ Auth::guard('web')->user()->lname ?? ''}}}'s <span class="special">Dashboard!</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="single_element">
                <div class="quick_activity">
                    <div class="row">
                        <div class="col-12">
                            <div class="quick_activity_wrap">
                                <div class="single_quick_activity">
                                    <h4>Investment Plan's</h4>
                                    @isset($user)
                                    <h3><span class="counter">{{$user->minimum ?? 'No Plan'}}</span> </h3>
                                    <p>
                                        @if($user->status == 2)
                                        <td class="text-center"><span class="badge badge-dark text-white">Pending</span></td>
                                        @endif
                                        @if($user->status == 1)
                                        <td class="text-center"><span class="badge badge-success text-white">Active</span></td>
                                        @endif
                                        @if($user->status == 0)
                                        <td class="text-center"><span class="badge badge-danger text-white">Blocked</span></td>
                                        @endif
                                    </p>
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Total Earning Balance</h4>
                                    @isset($email)
                                    @foreach ($email as $user )
                                    <h3>$ <span class="counter">{{{$user->withdraw_amount ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Current Balance</h4>
                                    @isset($email)
                                    @foreach ($email as $user )
                                    <h3>$ <span class="counter">{{{$user->total_amount ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Your Referal Email</h4>
                                    @isset($index)
                                    @foreach ($index as $user )
                                    <h3><span class="counter okayyy">{{{$user->email ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Total Referal</h4>
                                    @isset($index)
                                    @foreach ($index as $user )
                                    <h3># <span class="counter">{{{$user->ref1 ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                    <div class="single_quick_activity">
                                        <h4>Your Referal Link</h4>
                                        <h2 style="color: white;"> @isset($index)
                                            @foreach ($index as $user )
                                                {{ $user->refer }}
                                            @endforeach
                                            @endisset</h2>
                                    </div>

                                <div class="single_quick_activity">
                                    <h4>Daily Adds</h4>
                                    @isset($indexx)
                                    @foreach ($indexx as $user )
                                    <h3># <span class="counter">{{{$user->adds ?? '25'}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Remaining Daily Adds</h4>
                                    @isset($indexx)
                                    @foreach ($indexx as $user )
                                    <h3># <span class="counter">{{{$user->total_money ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Paid Adds</h4>
                                    @isset($indexxx)
                                    @foreach ($indexxx as $user )
                                    <h3># <span class="counter">{{{$user->adds ?? '25'}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Remaining Paid Adds</h4>
                                    @isset($indexxx)
                                    @foreach ($indexxx as $user )
                                    <h3># <span class="counter">{{{$user->total_money ?? ''}}}</span> </h3>
                                    @endforeach
                                    @endisset
                                </div>
                                <div class="single_quick_activity">
                                    <h4>Pending Withdraw Amount</h4>
                                    @isset($users)
                                    <h3>$ <span class="counter">{{$users->withdraw_amount ?? 'No Plan'}}</span> </h3>
                                    <p>
                                        @if($users->status == 2)
                                        <td class="text-center"><span class="badge badge-dark text-white">Pending</span></td>
                                        @endif
                                        @if($users->status == 1)
                                        <td class="text-center"><span class="badge badge-success text-white">Active</span></td>
                                        @endif
                                        @if($users->status == 0)
                                        <td class="text-center"><span class="badge badge-danger text-white">Blocked</span></td>
                                        @endif
                                    </p>
                                    @endisset
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
