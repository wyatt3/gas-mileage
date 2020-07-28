@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>
    <h1 class="mt-4">Maintenance Record <span class="subhead">({{$car->name()}})</span></h1>
    <a href="{{ route('maintenance.add', ['car_id' => $car->id]) }}" class="btn btn-primary mb-3">Add Record</a>

    <table id="maintenance" class="table table-striped table-dark text-center">
        <tr>        
            <th>Date</th>
            <th>Mileage</th>
            <th>Cost</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($car->maintenanceevents->sortByDesc('date') as $event)
        <tr> <?php $date = date_create($event->date); ?>
            <td><?php echo date_format($date, 'M jS Y'); ?></td>
            <td>{{ $event->mileage }}</td>
            <td>${{ number_format($event->cost, 2) }}</td>
            <td>{{ $event->description }}</td>
            <td><a class="btn btn-warning px-4 text-light" href="{{ route('maintenance.edit', ['id' => $event->id, 'car_id' => $car->id]) }}">Edit</a></td>
            <td><a class="btn btn-danger" href="{{ route('maintenance.delete', ['car_id' => $car->id, 'id' => $event->id]) }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection