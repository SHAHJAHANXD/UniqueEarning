@extends('admin.layout')
@section('content')


    <style>
        .okk {
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
                            <a href="/admin/add-adds" class="okayyy" style="margin-left: 700px;"> Upload Adds</a>
                        </div>
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="okk" id="table_id">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Link</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @isset($request)
                                        @foreach ($request as $users)
                                            <tr>
                                                <td class="text-center"> {{ $i++ }}</td>
                                                <td class="text-center">{{ $users->link ?? '' }}</td>
                                                <td>
                                                    <a href="/admin/add-delete/{{ $users->id }}"
                                                        class="badge badge-danger text-white"
                                                        style="cursor: pointer;">Delete</a>
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
