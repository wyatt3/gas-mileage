@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>

    <h1 class="mt-4">Gas Mileage <span class="subhead">({{$car->name()}})</span></h1>
    <a href="{{ route('gas.add', ['car_id' => $car->id]) }}" class="btn btn-primary mb-3">Add Gas</a>

    <table id="averages" class="table table-sm table-striped table-dark text-center">
        <tr>
            <th colspan="4" class="text-center py-2">Averages</th>
        </tr>
        <tr>
            <th>Miles/Fill Up</th>
            <th>Gas Mileage</th>
            <th>Cost/Gallon</th>
            <th>Total/Fill Up</th>
        </tr>
        <tr>
            <td>{{ number_format($averages['avgMiles'], 2) }}</td>
            <td>{{ number_format($averages['avgMileage'], 2) }}</td>
            <td>${{ number_format($averages['avgCostPerGallon'], 2) }}</td>
            <td>${{ number_format($averages['avgTotal'], 2) }}</td>
        </tr>
    </table>

    <table id="gasMileage" class="table table-striped table-dark text-center">
        <tr>        
            <th>Date</th>
            <th>Mileage</th>
            <th>Trip Miles</th>
            <th>Gallons</th>
            <th>Gas Mileage</th>
            <th>Cost/Gallon</th>
            <th>Total</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($car->gasevents->sortByDesc('date') as $event)
        <tr> <?php $date = date_create($event->date); ?>
            <td>{{ date_format($date, 'M jS Y') }}</td>
            <td>{{ $event->mileage }}</td>
            <td>{{ $event->trip_miles }}</td>
            <td>{{ number_format($event->gallons, 2) }}</td>
            <td>{{ number_format($event->gas_mileage, 2) }}</td>
            <td>${{ number_format($event->price_per_gallon, 2) }}</td>
            <td>${{ number_format($event->total, 2) }}</td>
            <td><a class="btn btn-warning text-light" href="{{ route('gas.edit', ['car_id' => $car->id, 'id' => $event->id]) }}">Edit</a></td>
            <td><a class="btn btn-danger" href="{{ route('gas.delete', ['car_id' => $car->id, 'id' => $event->id]) }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection