@extends('layouts.app')

@section('content')
    <a href="{{ route('home') }}" class="btn btn-outline-primary">&lsaquo; Back to Home</a>

    <div class="row">
    <div class="col-12 col-md-6">
        <form class="form-group" action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="bold-label mb-0" for="photo">Photo</label>
            <input class="form-control-file mb-1" type="file" id="photo" name="photo">
            <label class="bold-label mb-0 mt-1" for="year">Year</label>
            <select name="year" id="year" class='form-control bg-dark text-light mb-1'>
                @for($i = date('Y'); $i >= 1900; $i--)
                <option>{{$i}}</option>
                @endfor
            </select>
            @error('year')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="make">Make</label>
            <input class="form-control bg-dark text-light mb-1" type="text" name="make" id="make">
            @error('make')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="model">Model</label>
            <input class="form-control bg-dark text-light mb-1" type="text" name="model" id="model">
            @error('model')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="miles">Miles</label>
            <input class="form-control bg-dark text-light mb-1" type="number" min="1" name="mileage" id="miles">
            @error('mileage')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary mt-1" value="Submit">
        </form>
    </div>
</div>
@endsection