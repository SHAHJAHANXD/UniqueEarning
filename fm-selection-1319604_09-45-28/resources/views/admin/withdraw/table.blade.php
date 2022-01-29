<script type="text/javascript" src="{{asset('admin/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/datatable.js')}}"></script>
@extends('admin.layout')
@section('content')
<style>
    .gradeX {
        background-color: transparent !important;
    }

    .table.d {
        background-color: none !important;
    }

    .dataTables_info {
        color: white !important;
    }

    .table_id_length {
        color: white;
    }

    .dataTa {
        color: white !important;
    }
    .dataTables_length select
    {
        color: black !important;
    }
    .dataTables_filter input
    {
        color: black !important;
    }
</style>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <a href="/admin/add-new-withdraw-payment" class="okayyy" style="margin-left: 700px;">Add User Amount</a>
                        <h5 class="card-title">Live Streaming Table</h5>

                        <div class="table-responsive">
                            <table class="table table-hover" id="table_id">
                                @if(session('delete'))
                                <div class="alert alert-danger m-4 text-center ml-3">
                                    {{ session('delete')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th scope="text-center">#</th>
                                        <th scope="text-center">Name</th>
                                        <th scope="text-center">Email</th>
                                        <th scope="text-center">Platform</th>
                                        <th scope="text-center">Number</th>
                                        <th scope="text-center">Total Amount</th>
                                        <th scope="text-center">Withdraw Amount</th>
                                        <th scope="text-center">Remaining Amount</th>
                                        <th scope="text-center">Date</th>
                                        <th scope="text-center">Status</th>
                                        <th scope="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @isset($user)
                                    @foreach ($user as $userr)
                                    <tr class="odd gradeX">
                                        <td class="table-img center">
                                            {{$i++}}
                                        </td>
                                        <td class="text-center">{{$userr->user_name ?? ''}}</td>
                                        <td class="text-center">{{$userr->email ?? ''}}</td>
                                        <td class="text-center">{{$userr->platform ?? ''}}</td>
                                        <td class="text-center">{{$userr->number ?? ''}}</td>
                                        <td class="text-center">{{$userr->amount ?? ''}}</td>
                                        <td class="text-center">{{$userr->withdraw_amount ?? ''}}</td>
                                        <td class="text-center">{{$userr->remaining_amount ?? ''}}</td>
                                        <td class="text-center">{{$userr->created_at->format('m/d/Y') ?? ''}}</td>

                                        @if($userr->status == 2)
                                        <td class="text-center"><span class="badge badge-secondary text-white" href="">Pending</span></td>
                                        @endif
                                        @if($userr->status == 1)
                                        <td class="text-center"><span class="badge badge-success text-white">Approved</span></td>
                                        @endif
                                        @if($userr->status == 0)
                                        <td class="text-center"><span class="badge badge-danger text-white">Rejected</span></td>
                                        @endif
                                        <td class="text-center">


                                            <a href="/admin/withdraw_status1/{{$userr->id}}" class="badge badge-success text-white" style="cursor: pointer;">Approved</a>

                                            <a href="/admin/withdraw_status0/{{$userr->id}}" class="badge badge-danger text-white" style="cursor: pointer;">Rejected</a>




                                        </td>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection


        <script>
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>
