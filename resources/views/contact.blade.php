@extends('layouts.app')
@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option contact-breadcrumb set-bg" data-setbg="{{ asset('assets/img/breadcrumb/contact-breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="{{ asset('assets/contact/images/img-01.png') }}" alt="IMG">
        </div>

        <form class="contact1-form validate-form" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <span class="contact1-form-title">
                Get in touch
            </span>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1 {{ $errors->has('name') ? 'error' : '' }}" type="text" name="name" placeholder="Name">
                <span class="shadow-input1"></span>
                @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>

            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1 {{ $errors->has('email') ? 'error' : '' }}" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>

            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                <input class="input1 {{ $errors->has('phone') ? 'error' : '' }}" type="text" name="phone" placeholder="Phone Number">
                <span class="shadow-input1"></span>
                @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
                @endif
            </div>

            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1 {{ $errors->has('service') ? 'error' : '' }}" name="service" placeholder="Message"></textarea>
                <span class="shadow-input1"></span>
                @if ($errors->has('service'))
                <div class="error">
                    {{ $errors->first('service') }}
                </div>
                @endif
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" type="submit">
                    <span>
                        Send Email
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Contact Begin -->

@endsection