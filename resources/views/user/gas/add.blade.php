@extends('layouts.app')

@section('content')
    <a href="{{ route('gas', ['car_id' => $car_id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Gas Mileage</a>

    <form method="POST" class="form-control">
        @csrf
        <input class="form-control" type="date" name="date">
        <input class="form-control" type="text" name="miles" placeholder="Miles">
        <input type="submit" class="btn btn-success" value="Submit">
    </form>
@endsection