@extends('layouts.app')

@section('content')
<a href="{{ route('gas', ['car_id' => $car->id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Gas Mileage</a>
<h1 class="mt-4 mb-3">Add Gas Entry ({{ $car->name() }})</h1>

<div class="row">
    <div class="col-6">
        <form action="{{ route('gas.store') }}" method="POST" class="form-group">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <label for="date" class="bold-label mb-0">Date</label>
            <input class="form-control bg-dark text-light mb-1" type="date" name="date" id="date" value="{{ date('Y-m-d') }}">
            @error('date')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="miles" class="bold-label mb-0 mt-1">Odometer Mileage</label>
            <input class="form-control bg-dark text-light mb-1" type="number" name="miles" id="miles" value="{{ $car->mileage }}">
            @error('miles')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="tripMiles" class="bold-label mb-0 mt-1">Trip Miles</label>
            <input class="form-control bg-dark text-light mb-1" type="number" min="0.1" step="0.1" name="trip_miles" id="tripMiles">
            @error('trip_miles')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="gallons" class="bold-label mb-0 mt-1">Gallons</label>
            <input class="form-control bg-dark text-light mb-1" type="number" min="0.01" step="0.01" name="gallons" id="gallons">
            @error('gallons')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="cost" class="bold-label mb-0 mr-0 mt-1">Total</label>
            <div class="inner-addon left-addon text-light">
                <i class="p-2 pl-3">$</i>
                <input class="form-control bg-dark text-light mb-2" type="number" min="0.01" step="0.01" name="total" id="cost">
            </div>
            @error('total')
            <div class="text-danger mb-1">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</div>
@endsection