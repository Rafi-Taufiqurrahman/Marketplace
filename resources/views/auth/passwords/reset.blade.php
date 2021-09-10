@extends('frontend.main_master')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Forget Password</li>
            </ul>0
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="col-md-12 col-sm-12 sign-in">
                <h4 class="">Reset Password</h4>
                <form action=" {{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input type="email" class="form-control unicase-form-control text-input" name="email" value="{{ $email ?? old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Password<span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" name="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Confirm Password<span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="width: 100%">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
    @include('frontend.body.brands')
</div>
@endsection
