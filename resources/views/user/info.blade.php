@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-outline-primary" href="{{ route('home') }}">&lsaquo; Back to Home</a><br><br>
    <div class="card trans-dark">
        <div class="card-header"><h2>Account Settings</h2></div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <label for="name"><strong>Name:</strong>&nbsp;</label><p class='d-inline' id='name'>{{ $user->name }}&nbsp;</p><a class='btn btn-primary' href="{{ route('user.edit', ['method' => 'name']) }}">Edit Name</a><br>
                    <label for="email"><strong>Email:</strong>&nbsp;</label><p class='d-inline' id='email'>{{ $user->email }}</p>
                </div>
                <div class="col-md-12 col-lg-4"></div>
                <div class="col-md-12 col-lg-4">
                    <a class='btn btn-warning text-light mb-1' href="{{ route('user.edit', ['method' => 'password']) }}">Change Password</a><br>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Close Account</button>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you really want to close your account?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    This cannot be undone.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('user.delete') }}" class="btn btn-danger">Close</a>
                </div>
            </div>
        </div>
    </div>
@endsection