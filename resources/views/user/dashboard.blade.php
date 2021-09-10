@extends('frontend.main_master')

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img class="card-img-top" style="border-radius: 50%; margin-bottom: 5px; margin-top: 5px" src="{{ asset('frontend/assets/images/testimonials/member1.png') }}" height="100%" width="100%">
                <h4 class="text-center"><span class="badge">{{ Auth::user()->name }}</span></h4>
                <ul class="list-group list-group-flush">
                    <a href="" class="btn btn-primary btn-block">Home</a>
                    <a href="" class="btn btn-primary btn-block">Profile Update</a>
                    <a href="" class="btn btn-primary btn-block">Change Password</a>
                    <a href="" class="btn btn-danger btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>
</div>
@endsection
