@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->jabatan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <a class="btn btn-primary" href="{{action('usersController@downloadPDF')}}">Download PDF</a>
                            <a class="btn btn-primary" href="{{action('usersController@downloadXLSX')}}">Download XLSX</a>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
