@extends('admin.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('admin/datatable.js')}}"></script>

<script>
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>

<style>
    .okk
    {
        display: block;
    width: 100%;
    overflow-x: auto;
    }
</style>
<div class="main_content_iner ">
    <div class="container-fluid plr_30 body_white_bg pt_30">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        <h4>Table</h4>
                        <!-- <div class="box_right d-flex lms_block">
                            <div class="serach_field_2">
                                <div class="search_inner">
                                    <form Active="#">
                                        <div class="search_field">
                                            <input type="text" placeholder="Search content here...">
                                        </div>
                                        <button type="submit"> <i class="ti-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <div class="add_button ml-10">
                                <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                            </div>
                        </div> -->
                    </div>

                    <div class="QA_table ">
                        <!-- table-responsive -->
                        <table class="okk" id="table_id">
                            <thead>

                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Reference ID</th>
                                    <th scope="col">Total Reference</th>
                                    <th scope="col">Service Status</th>
                                    <th scope="col">User Service</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @isset($user)
                                @foreach($user as $users)
                                <tr>

                                    <td> {{$i++}}</td>
                                    <td>{{$users->fname ?? ''}}</td>
                                    <td>{{$users->lname ?? ''}}</td>
                                    <td>{{$users->email ?? ''}}</td>
                                    <td>{{$users->country ?? 'Null'}}</td>
                                    <td>{{$users->city ?? 'Null'}}</td>
                                    <td>{{$users->reference ?? ''}}</td>
                                    <td>{{$users->ref1 ?? ''}}</td>
                                    @if($users->statuss == 1)
                                    <td class="text-center"><span class="badge badge-success text-white">Active</span></td>
                                    @endif
                                    @if($users->statuss == 0)
                                    <td class="text-center"><span class="badge badge-danger text-white">Blocked</span></td>
                                    @endif
                                    <td>
                                        <a href="/update-statuss-1/{{$users->id}}" class="badge badge-success text-white" style="cursor: pointer;">Active</a>

                                        <a href="/update-statuss-0/{{$users->id}}" class="badge badge-danger text-white" style="cursor: pointer;">Block</a>

                                        <!-- <a href="/admin/delete/{{$users->id}}" class="badge badge-danger text-white" style="cursor: pointer;">Delete</a> -->

                                    </td>
                                     @if($users->status == 1)
                                    <td class="text-center"><span class="badge badge-success text-white">Active</span></td>
                                    @endif
                                    @if($users->status == 0)
                                    <td class="text-center"><span class="badge badge-danger text-white">Blocked</span></td>
                                    @endif
                                    <td>
                                        <a href="/update-status-1/{{$users->id}}" class="badge badge-success text-white" style="cursor: pointer;">Active</a>

                                        <a href="/update-status-0/{{$users->id}}" class="badge badge-danger text-white" style="cursor: pointer;">Block</a>

                                        <!-- <a href="/admin/delete/{{$users->id}}" class="badge badge-danger text-white" style="cursor: pointer;">Delete</a> -->

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
</div>

@endsection

