@extends('layouts.app')

@section('content')
<a href="{{ route('maintenance', ['car_id' => $car->id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Maintenance</a>
<h1 class="mt-4 mb-3">Edit Maintenance Entry ({{ $car->name() }})</h1>
<div class="row">
    <div class="col-6">
        <form class="form-group" action="{{ route('maintenance.update') }}" method="POST">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <input type="hidden" name="id" value="{{ $event->id }}">
            <label for="date" class="bold-label mb-0">Date</label>
            <input class="form-control bg-dark text-light mb-1" type="date" name="date" id="date" value="{{ $event->date }}">
            @error('date')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="mileage" class="bold-label mb-0 mt-1">Mileage</label>
            <input class="form-control bg-dark text-light mb-1" type="number" name="mileage" id="mileage" value="{{ $event->mileage }}">
            @error('mileage')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="cost" class="bold-label mb-0 mr-0 mt-1">Cost</label>
            <div class="inner-addon left-addon text-light">
                <i class="p-2 pl-3">$</i>
                <input class="form-control bg-dark text-light mb-1" type="number" min="0.01" step="0.01" name="cost" id="cost" value="{{ number_format($event->cost, 2) }}">
            </div>
            @error('cost')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="desc" class="bold-label mb-0 mt-1">Description</label>
            <textarea class="form-control bg-dark text-light mb-1" rows="5" name="description" id="desc">{{ $event->description }}</textarea>
            @error('description')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary mt-1" value="Submit">
        </form>
    </div>
</div>
@endsection