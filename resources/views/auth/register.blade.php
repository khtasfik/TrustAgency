@extends('layouts.app')
@section('content')
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank</a>
                </li>
            </ul>
            <form action="{{ url('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a User</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name of the Enterprise/ Individual" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                <div class="form-group hidden-field">
                                    <label for="File">Picture Upload</label>
                                    <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" />
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="File">Document Upload</label>
                                    <input type="file" class="form-control @error('document') is-invalid @enderror" name="document" />
                                    @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" placeholder="Address" required></textarea>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">Gender</label><br><br>
                                        <input type="radio" name="gender" value="1"> Male
                                        <input type="radio" name="gender" value="2"> Female
                                        <!-- <span>  </span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Mobile Number" name="phone" />
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" placeholder="City" name="city" />
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('district') is-invalid @enderror" value="{{ old('district') }}" placeholder="District" name="district" />
                                    @error('district')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nomini') is-invalid @enderror" value="{{ old('nname') }}" placeholder="Nomini Name" name="nname" />
                                    @error('nomini')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nphone') is-invalid @enderror" value="{{ old('nphone') }}" placeholder="Nomini Phone Number" name="nphone" />
                                    @error('nphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- <input type="submit" class="btnRegister" value="Register" /> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Bank Information</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('bname') is-invalid @enderror" value="{{ old('bname') }}" placeholder="Bank Holder Name" name="bname" />
                                    @error('bname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('bnumber') is-invalid @enderror" value="{{ old('bnumber') }}" placeholder="Account Number(0000-0000-0000-0000)" name="bnumber" />
                                    @error('bnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('expairation') is-invalid @enderror" value="{{ old('expairation') }}" placeholder="Expairation(00-00-0000)" name="expairation" />
                                    @error('expairation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('cvv') is-invalid @enderror" value="{{ old('cvv') }}" placeholder="Cvv(0000)" name="cvv" />
                                    @error('cvv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('cwl') is-invalid @enderror" value="{{ old('cwl') }}" placeholder="City where loan is required" name="cwl" />
                                    @error('cwl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('bwl') is-invalid @enderror" value="{{ old('bwl') }}" placeholder="Branch where loan is required. (If any)" name="bwl" />
                                    @error('bwl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('loan_type') is-invalid @enderror" value="{{ old('loan_type') }}" placeholder="Which Loan Do you Need" name="loan_type" />
                                    @error('loan_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('loan_amount') is-invalid @enderror" value="{{ old('loan_amount') }}" placeholder="Loan Amount" name="loan_amount" />
                                    @error('loan_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection