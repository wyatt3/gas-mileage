@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-outline-primary" href="{{ route('user') }}">&lsaquo; Back to Account Settings</a><br><br>
    <div class="card trans-dark">
        @if($method == 'name')
        <div class="card-header"><h2>Change Name</h2></div>
        <div class="card-body pb-4">
            
            <form action="{{ route('user.edit', ['method' => 'name']) }}" class='form-inline d-inline' method="POST">@csrf
                <label class="text-left d-inline" for="name"><strong>Name:</strong>&nbsp;</label>
                <input class='form-control' type='text' name='name' value='{{ $user->name }}'>&nbsp;
                <input class='d-inline btn btn-primary' type='submit' value='Submit'>
            </form><br>
            <p class='d-inline'><strong>Email:</strong>&nbsp;{{ $user->email }}</p>
        </div>
        @elseif($method == 'password')
        <div class="card-header"><h2>Change Password</h2></div>
        <div class="card-body pb-4">
            <form class="form-inline d-inline" method="POST">@csrf
                <p>
                <label for="oldPass" class="text-left d-inline"><strong>Old Password:</strong>&nbsp;</label>
                <input class="form-control d-inline" type="password" name="oldPassword">
                </p>
                <p>
                <label for="newPass" class="text-left d-inline"><strong>New Password:</strong>&nbsp;</label>
                <input class="form-control d-inline" type="password" name="newPassword">
                </p>
                <p>
                <label for="confPass" class="text-left d-inline"><strong>Confirm Password:</strong>&nbsp;</label>
                <input class="form-control d-inline" type="password" name="confirmNewPassword">
                </p>
                <input class="form-control btn btn-warning text-light" type="submit" value="Change Password">
            </form>
        </div>
        @endif
    </div>
</div>
@endsection