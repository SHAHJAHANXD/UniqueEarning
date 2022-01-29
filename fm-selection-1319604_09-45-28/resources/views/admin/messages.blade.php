@extends('admin.layout')
@section('content')


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


                    </div>

                    <div class="QA_table ">
                        <!-- table-responsive -->
                        <table class="okk" id="table_id">
                            <thead>

                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col" class="text-center">First Name</th>
                                    <th scope="col" class="text-center">Email</th>
                                    <th scope="col" class="text-center">Message</th>

                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @isset($request)
                                @foreach($request as $users)
                                <tr>

                                    <td class="text-center"> {{$i++}}</td>
                                    <td class="text-center">{{$users->name ?? ''}}</td>
                                    <td class="text-center">{{$users->email ?? ''}}</td>
                                    <td class="text-center">{{$users->message ?? ''}}</td>

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

