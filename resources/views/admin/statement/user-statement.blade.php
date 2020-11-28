@extends('admin.dashboard')
@section('content')
<div class="main-content">
    <div class="container-fluid content-top-gap">
        <section class="tables">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4 m-auto"><strong>User Statement</strong></h3>
                            </div>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p class="text text-center"><b>{{ $message }}</b></p>
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover text-center table-dark text-white">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>User Loan Use</th>
                                                <th>User Status </th>
                                                <th>User Balance </th>
                                                <th>User Loan Repayment(Month) </th>
                                                <td width="280px">Action</td>
                                            </tr>
                                        </thead>

                                        @foreach($userStatement as $data)
                                        <tbody>
                                            @if($data->status == 'Accept')
                                            <tr>
                                                <td>{{$data->user_id}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->loan_type}}</td>
                                                <td>{{$data->status}}</td>
                                                <td>{{$data->balance}}</td>
                                                <td>{{$data->loan_for}}</td>
                                                <td>
                                                    <a class="btn btn-info" href="{{ route('userStatement.show', [$data->id] ) }}">Show Statement</a>
                                                </td>
                                            </tr>
                                            @endif
                                        </tbody>

                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection