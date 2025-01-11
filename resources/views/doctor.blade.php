@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Meet Our Doctors</h1>
    <div class="row">
        @foreach($doctors as $doctor)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <img src="{{asset('images')}}/{{$doctor->image}}" alt="{{ $doctor->name }}" width="130" class="img-fluid">
                    <br><br>
                    <h5 class="card-title">{{ $doctor->name }}</h5>
                    <p class="card-text">Specialization: {{ $doctor->specialization }}</p>
                    <p class="card-text">Contact: {{ $doctor->contactNumber }}</p>
                    <a href="mailto:{{ $doctor->email }}" class="btn btn-primary">Email</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection