@extends('layouts.app')
<!-- Home page for people who have either not logged in or not registered
 If user has checked remember me, this page will be skipped and they will
be taken straight to the user home page -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">Home Page</div>
            </div>
        </div>
    </div>
</div>
@endsection