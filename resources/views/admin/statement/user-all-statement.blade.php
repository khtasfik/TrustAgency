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
                                @foreach ($userStatement as $data)

                                <div class="table-responsive">
                                    <table class="table table-striped table-hover text-center table-dark text-white">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Account Name</th>
                                                <th>User Account Number</th>
                                                <th>User Payment </th>
                                                <th>User Email </th>
                                                <th>User Mobile No </th>
                                                <th>Loan Type</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $i = 0;
                                        @endphp

                                        <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $data->account_name }}</td>
                                                <td>{{ $data->account_number }}</td>
                                                <td>{{ $data->card_amount }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->loan_type }}</td>
                                                <td>{{ $data->pupdate }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection