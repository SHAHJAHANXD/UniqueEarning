@extends('user.layout')
@section('content')
<div class="container" style="margin-top: 90px">
    <div class="row">
        <div class="col-12">
<span> <h2 style="    background-color: aquamarine;
    text-align: center;">Investment Table</h2>  </span>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Min $ Invest</th>
                        <th class="text-center">Number</th>
                        <th class="text-center">Trx ID</th>
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
                        <td class="text-center">{{$userr->minimum ?? ''}}</td>


                        <td class="text-center">{{$userr->number ?? ''}}</td>

                        <td class="text-center">{{$userr->trx ?? ''}}</td>
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
    </div>
</div>

@endsection
