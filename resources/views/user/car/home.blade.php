@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>

    <h1 class="mt-4">{{$car->name()}}</h1>
    <div class="car-details pl-5">
    <div class="ml-2 mb-3 row text-light">
        <a class="mr-3 btn btn-primary" href="{{ route('gas', ['car_id' => $car->id]) }}">View Gas Mileage</a>
        <a class="btn btn-primary" href="{{ route('maintenance', ['car_id' => $car->id]) }}">View Maintenance</a>
    </div>
        <img class="rounded" src="{{ asset('img/18.jpg') }}" width="450px">
        <p class="mt-3"><strong>Year: </strong> {{ $car->year }}<br>
        <strong>Make: </strong> {{ $car->make }}<br>
        <strong>Model: </strong> {{ $car->model }}<br>
        <strong>Miles: </strong> {{ $car->mileage }}<br>
        </p>
        <a href="{{ route('car.edit', ['car_id' => $car->id]) }}" class="btn btn-warning text-light mb-2">Edit Car</a><br>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete Car</button>
    </div>


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Do you really want to delete this car?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    This cannot be undone, so only proceed if you are sure you don't want this car.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('car.delete', ['car_id' => $car->id]) }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection