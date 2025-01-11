@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h1>Welcome to Southern Clinic</h1>
            <p class="lead">We provide high-quality healthcare services for all your needs.</p>
            <div class="d-grid gap-2">
                <a href="{{ route('appointment') }}" class="btn btn-primary btn-lg">Book Appointment</a>
                <a href="{{ route('search') }}" class="btn btn-outline-primary btn-lg">Search Appointments</a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="/images/doctor.png" class="img-fluid" width="120" height="200" alt="Doctor">
                <div class="card-body">
                    <h5 class="card-title">Our Doctors</h5>
                    <p class="card-text">Meet our experienced doctors who provide the best care for you.</p>
                    <a href="{{route('doctor')}}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/images/clinic.png" class="img-fluid" width="120" height="200" alt="Clinic">
                <div class="card-body">
                    <h5 class="card-title">Our Clinic</h5>
                    <p class="card-text">Visit us in our state-of-the-art facility, designed for your comfort and care.</p>
                    <a href="{{route('about')}}" class="btn btn-primary">Explore Clinic</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="/images/service.png" class="img-fluid" width="120" height="200" alt="Service">
                <div class="card-body">
                    <h5 class="card-title">Services</h5>
                    <p class="card-text">We offer a variety of healthcare services to meet your needs.</p>
                    <a href="#" class="btn btn-primary">View Services</a>
                </div>
            </div>
        </div>
    </div>
@endsection