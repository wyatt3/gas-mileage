@extends('layouts.app')

@section('content')
<a href="{{ route('gas', ['car_id' => $car->id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Gas Mileage</a>
<h1 class="mt-4 mb-3">Edit Gas Entry ({{ $car->name() }})</h1>
<div class="row">
    <div class="col-6">
        <form action="{{ route('gas.update') }}" method="POST" class="form-group">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <input type="hidden" name="id" value="{{ $event->id }}">
            <label for="date" class="bold-label mb-0">Date</label>
            <input class="form-control bg-dark text-light mb-2" type="date" name="date" id="date" value="{{ $event->date }}">
            <label for="miles" class="bold-label mb-0">Odometer Mileage</label>
            <input class="form-control bg-dark text-light mb-2" type="number" name="miles" id="miles" value="{{ $event->mileage }}">
            <label for="tripMiles" class="bold-label mb-0">Trip Miles</label>
            <input class="form-control bg-dark text-light mb-2" type="number" min="0.1" step="0.1" name="trip_miles" id="tripMiles" value="{{ $event->trip_miles }}">
            <label for="gallons" class="bold-label mb-0">Gallons</label>
            <input class="form-control bg-dark text-light mb-2" type="number" min="0.01" step="0.01" name="gallons" id="gallons" value="{{ $event->gallons }}">
            <label for="cost" class="bold-label mb-0 mr-0">Total</label>
            <div class="inner-addon left-addon text-light">
                <i class="p-2 pl-3">$</i>
                <input class="form-control bg-dark text-light mb-3" type="number" min="0.01" step="0.01" name="total" id="cost" value="{{ number_format($event->total, 2) }}">
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</div>

@endsection