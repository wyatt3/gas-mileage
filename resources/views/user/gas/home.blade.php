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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table id="gasMileage" class="table table-striped table-dark">
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
        @foreach($car->gasevents as $gasEvent)
        <tr> <?php $date = date_create($gasEvent->date); ?>
            <td><?php echo date_format($date, 'M jS Y'); ?></td>
        </tr>
        @endforeach
    </table>
@endsection