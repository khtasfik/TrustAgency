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
                                <h3 class="h4 m-auto"><strong>Admin Statement</strong></h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover text-center table-dark text-white">
                                        <thead>
                                            <tr>
                                                <td>Account Name</td>
                                                <td>Account Number</td>
                                                <td>Withdraw Amount</td>
                                                <td>Expairation</td>
                                                <td>Cvv Number</td>
                                                <td>Withdraw Date & Time</td>
                                            </tr>
                                        </thead>
                                        @foreach($withdrawStatement as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{$data->admin_card_name}}</td>
                                                <td>{{$data->admin_card_number}}</td>
                                                <td>{{$data->admin_card_amount}}</td>
                                                <td>{{$data->admin_expairation}}</td>
                                                <td>{{$data->admin_cvv}}</td>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
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