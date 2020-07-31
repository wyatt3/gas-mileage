@extends('layouts.app')

@section('content')
<a href="{{ route('car', ['car_id' => $car->id]) }}" class="btn btn-outline-primary">&lsaquo; Back to Car</a>
<h1 class="mt-4">Edit Car ({{$car->name()}})</h1>

<div class="row">
    <div class="col-6">
        <form class="form-group" action="{{ route('car.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="bold-label mb-0" for="photo">Photo</label>
            <input class="form-control-file mb-1" type="file" id="photo" name="photo" accept="image/*">
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <label class="bold-label mb-0 mt-1" for="year">Year</label>
            <select name="year" id="year" class='form-control bg-dark text-light mb-1'>
                @for($i = date('Y'); $i >= 1900; $i--)
                <option <?php if($i == $car->year) {echo 'selected';} ?>>{{$i}}</option>
                @endfor
            </select>
            @error('year')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="make">Make</label>
            <input class="form-control bg-dark text-light mb-1" type="text" name="make" id="make" value="{{ $car->make }}">
            @error('make')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="model">Model</label>
            <input class="form-control bg-dark text-light mb-1" type="text" name="model" id="model" value="{{ $car->model }}">
            @error('model')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label class="bold-label mb-0 mt-1" for="miles">Miles</label>
            <input class="form-control bg-dark text-light mb-1" type="number" min="1" name="mileage" id="miles" value="{{ $car->mileage }}">
            @error('mileage')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary mt-1" value="Submit">
        </form>
    </div>
</div>
@endsection