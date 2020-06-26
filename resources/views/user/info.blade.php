@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card trans-dark">
        <div class="card-header"><h2>Account Settings</h2></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <label for="name"><strong>Name:</strong>&nbsp;</label><p class='d-inline' id='name'>{{ $user->name }}&nbsp;</p><a class='btn btn-primary' href='{{ route("user.edit") }}'>Edit Name</a><br>
                    <label for="email"><strong>Email:</strong>&nbsp;</label><p class='d-inline' id='email'>{{ $user->email }}</p>
                </div>
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-4">
                    <a class='btn btn-warning text-light mb-1'>Change Password</a><br>
                    <a class='btn btn-danger text-light'>Close Account</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection