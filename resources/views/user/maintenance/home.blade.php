@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>
    <h1 class="mt-4">Maintenance Record <span class="subhead">({{$car->name()}})</span></h1>
    <a href="{{ route('maintenance.add', ['car_id' => $car->id]) }}" class="btn btn-primary">Add Record</a>
@endsection