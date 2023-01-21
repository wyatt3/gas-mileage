@extends('layouts.app')

@section('content')
<a href="{{ route('maintenance', ['car_id' => $car->id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Maintenance</a>
<h1 class="mt-4 mb-3">Add Maintenance Entry ({{ $car->name() }})</h1>
<div class="row">
    <div class="col-12 col-md-6">
        <form class="form-group" action="{{ route('maintenance.store') }}" method="POST">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <label for="date" class="bold-label mb-0">Date</label>
            <input class="form-control bg-dark text-light mb-1" type="date" name="date" id="date" value="{{date('Y-m-d')}}">
            @error('date')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="mileage" class="bold-label mb-0 mt-1">Mileage</label>
            <input class="form-control bg-dark text-light mb-1" type="number" name="mileage" id="mileage" value="{{ $car->mileage }}">
            @error('mileage')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="cost" class="bold-label mb-0 mr-0 mt-1">Cost</label>
            <div class="inner-addon left-addon text-light">
                <i class="p-2 pl-3">$</i>
                <input class="form-control bg-dark text-light mb-1" type="number" min="0" step="0.01" name="cost" id="cost">
            </div>
            @error('cost')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="desc" class="bold-label mb-0 mt-1">Description</label>
            <textarea class="form-control bg-dark text-light mb-1" rows="5" name="description" id="desc"></textarea>
            @error('description')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary mt-1" value="Submit">
        </form>
    </div>
</div>
@endsection