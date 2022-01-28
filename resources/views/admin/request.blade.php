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

                        </div>

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="okk" id="table_id">
                                <thead>

                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">First Name</th>
                                        <th scope="col" class="text-center">Last Name</th>
                                        <th scope="col" class="text-center">Email</th>
                                        <th scope="col" class="text-center">Minimum</th>
                                        <th scope="col" class="text-center">Mobile #</th>
                                        <th scope="col" class="text-center">Trx ID:</th>
                                        <th scope="col" class="text-center">Status</th>
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
                                                <td class="text-center">{{ $users->fname ?? '' }}</td>
                                                <td class="text-center">{{ $users->lname ?? '' }}</td>
                                                <td class="text-center">{{ $users->email ?? '' }}</td>
                                                <td class="text-center">{{ $users->minimum ?? 'Null' }}</td>
                                                <td class="text-center">{{ $users->number ?? '' }}</td>
                                                <td class="text-center">{{ $users->trx ?? '' }}</td>

                                                @if ($users->status == 2)
                                                    <td class="text-center"><span class="badge badge-secondary text-white"
                                                            href="">Pending</span></td>
                                                @endif
                                                @if ($users->status == 1)
                                                    <td class="text-center"><span
                                                            class="badge badge-success text-white">Paid</span></td>
                                                @endif
                                                @if ($users->status == 0)
                                                    <td class="text-center"><span
                                                            class="badge badge-danger text-white">Updaid</span></td>
                                                @endif
                                                <td>
                                                    <a href="/update-invest-status-1/{{ $users->id }}"
                                                        class="badge badge-success text-white" style="cursor: pointer;">Paid</a>

                                                    <a href="/update-invest-status-0/{{ $users->id }}"
                                                        class="badge badge-danger text-white"
                                                        style="cursor: pointer;">Unpaid</a>

                                                    <!-- <a href="/admin/delete/{{ $users->id }}" class="badge badge-danger text-white" style="cursor: pointer;">Delete</a> -->

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
