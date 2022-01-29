@extends('user.layout')
@section('content')
<div class="container table-responsive py-5">
    <table class="table table-bordered table-hover" style="    margin-top: 100px;">
        <thead class="thead-dark">
            <tr>
                <th class="">#</th>
                <th class="text-center">Date</th>
                <th class="text-center">Time</th>
                <th class="text-center">Email</th>
                <th class="text-center">Total Amount</th>
                <th class="text-center">Withdraw Amount</th>
                <th class="text-center">Remaining Amount</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp
            @isset($history)
            @foreach ($history as $userr)
            <tr class="odd gradeX">
                <td class="table-img center">
                    {{$i++}}
                </td>
                <td class="text-center">{{$userr->created_at->format('m/d/Y')}}</td>
                <td class="text-center">{{$userr->created_at->format('H:i:s A')}}</td>
                <td class="text-center">{{$userr->email ?? ''}}</td>
                <td class="text-center">{{$userr->amount ?? ''}}</td>
                <td class="text-center">{{$userr->withdraw_amount  ?? ''}}</td>
                <td class="text-center">{{$userr->remaining_amount  ?? ''}}</td>
                @if($userr->status == 2)
                <td class="text-center"><span class="badge badge-secondary text-white" href="">Pending</span></td>
                @endif
                @if($userr->status == 1)
                <td class="text-center"><span class="badge badge-success text-white">Approved</span></td>
                @endif
                @if($userr->status == 0)
                <td class="text-center"><span class="badge badge-danger text-white">Rejected</span></td>
                @endif
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
@endsection
