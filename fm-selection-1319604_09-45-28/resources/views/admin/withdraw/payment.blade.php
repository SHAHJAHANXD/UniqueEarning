@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h5 class="card-title">Withdraw Table</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
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
                                        <th scope="col">#</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Action</th>
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
                                        <td class="center">{{$userr->userid}}</td>
                                        <td class="center">{{$userr->email}}</td>
                                        <td class="center">{{$userr->total_amount}}</td>
                                        <td class="center">{{$userr->withdraw_amount}}</td>

                                        <td>
                                            <a href="/admin/price-edit/{{$userr->id}}">Edit</a>
                                        </td>
                                        <td>
                                            <a href="/admin/price/delete/{{$userr->id}}">Delete</a>
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