@extends('layouts.app')

@section('content')
<a href="{{ route('maintenance', ['car_id' => $car_id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Maintenance</a>
<form class="form-group" action="{{ route('maintenance.update') }}" method="POST">
    @csrf
    <input class="form-control" type="date" name="date" value="{{ $event->date }}">
</form>
@endsection