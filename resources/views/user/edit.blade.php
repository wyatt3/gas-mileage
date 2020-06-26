@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card trans-dark">
        <div class="card-header"><h2>Account Settings</h2></div>
        <div class="card-body pb-4">
            <label for="name"><strong>Name:</strong>&nbsp;</label><form action="{{ route('user.edit') }}" class='form-inline d-inline' method="POST">@csrf<input class='d-inline' type='hidden' name='type' value='name'><input class='form-control' type='text' name='name' value='{{ $user->name }}'>&nbsp;<input class='d-inline btn btn-primary' type='submit' value='Submit'><br>
            <p class='d-inline'><strong>Email:</strong>&nbsp;{{ $user->email }}</p>
        </div>
    </div>
</div>
@endsection