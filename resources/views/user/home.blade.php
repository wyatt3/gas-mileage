@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Home</h1>
        <div class="row">
            @foreach($cars as $car)
            <div class="col-md-12 col-lg-4">
                    <div class="card bg-dark text-light mb-3">
                        <div class="card-header"><h3>{{$car->name()}}</h3></div>
                        <div class="card-body"><img src=""></div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6 col-md-12"><a class='btn btn-block btn-primary' href="{{ route('gas', ['car_id' => $car->id]) }}">Gas Mileage</a></div>
                                <div class="d-lg-none"><br><br><br></div>
                                <div class="col-lg-6 col-md-12"><a class='btn btn-block btn-primary' href='{{ route("maintenance", ["car_id" => $car->id]) }}'>Maintenance</a></div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            @endforeach
            <div class="col-md-12 col-lg-4">
                    <div class="card bg-dark text-light mb-3">
                        <div class="card-header"><h3>Add Car</h3></div>
                        <div class="card-body"><img src=""></div>
                    
                    </div>
                </div>
        </div>
    </div>
    {{$cars->links()}}
@endsection