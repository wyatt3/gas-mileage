@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Home<h1>
        @foreach($cars as $car)
        <p>{{$car->make}}</p>
        @endforeach
    </div>
@endsection