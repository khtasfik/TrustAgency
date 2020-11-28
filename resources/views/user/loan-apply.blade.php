@extends('user.dashboard')
@section('content')
<!-- Basic Form-->
<section class="center">
    <div class="main-content col-lg-6 m-auto">
        <div class="container-fluid content-top-gap">
            <!-- <section class="forms"> -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading text-center">
                    <h3>Apply Here <span></span></h3>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <h5 class="text text-center">{{ $message }}</h5>
                </div>
                @endif
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="input__label">Loan Name</label>
                                <input type="text" class="form-control input-style @error('loan_type') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Business Loan" name="loan_type">

                                @error('loan_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">Loan Amount</label>
                                <input type="text" name="loan_amount" class="form-control input-style @error('loan_amount') is-invalid @enderror" id="exampleInputPassword1" placeholder="000000">
                                @error('loan_amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">How Long For Loan(Month)</label>
                                <input type="text" name="loan_for" class="form-control input-style @error('loan_for') is-invalid @enderror" id="exampleInputPassword1" placeholder="12">
                                @error('loan_for')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="input__label">Document Upload</label>
                                <input type="file" name="document" class="form-control input-style @error('document') is-invalid @enderror" id="exampleInputPassword1">
                                @error('document')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-check check-remember check-me-out">
                                <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                                <label class="form-check-label checkmark" for="exampleCheck1">Terms & Conditions</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-style mt-4">Apply</button>
                        </form>
                    </div>
                </div>
                <!-- </section> -->
            </div>
        </div>
        </div>
    </div>
</section>
@endsection