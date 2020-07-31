@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Home</h1>
        <div class="row">
            @foreach($cars as $car)
            <div class="col-md-12 col-lg-5 col-xl-4">
                    <div class="card car-card bg-dark text-light mb-3">
                        <a href="{{ route('car', ['car_id' => $car->id]) }}">
                        <div class="card-header"><h3 class="text-light">{{$car->name()}}</h3></div>
                        <div class="card-body text-center"><img class="car-image rounded" src="{{ asset('storage/app/carImages/' . $car->photo_name) }}"></div>
                        </a>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6"><a class='btn btn-block btn-primary' href="{{ route('gas', ['car_id' => $car->id]) }}">Gas Mileage</a></div>
                                <div class="col-6"><a class='btn btn-block btn-primary' href='{{ route("maintenance", ["car_id" => $car->id]) }}'>Maintenance</a></div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            @endforeach
            <div class="col-md-12 col-lg-3">
                <a class="btn btn-block btn-dark" href="{{ route('car.add') }}"><img src="{{ asset('img/add.png') }}" height="150px"></a>
            </div>
        </div>
    </div>
    {{$cars->links()}}
@endsection