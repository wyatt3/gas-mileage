@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>

    <a href="{{ route('gas.add', ['car_id' => $car->id]) }}" class="btn btn-primary">Add Gas</a>

    <table class="table">
        <tr>        
            <th>Test</th>
        </tr>
        @foreach($car->gasevents as $gasEvent)
        <tr>
            <td>{{ $gasEvent->gas_mileage }}</td>
        </tr>
        @endforeach
    </table>
@endsection