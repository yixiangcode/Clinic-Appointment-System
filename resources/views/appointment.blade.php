@extends('layout')
@section('content')
<div class="text-center mb-4">
    <h1>Book an Appointment</h1>
    <p class="text-muted">Choose a date and time for your appointment</p>
</div>
<br>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
    </div>
@endif

<div class="card">
    <div class="card-header bg-primary text-white text-center">
        Appointment Form
    </div>
    <div class="card-body">
        <form action="{{route('appointment.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="patientName" class="form-label">Patient Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required>
            </div>

            <div class="mb-3">
                <label for="appointmentDate" class="form-label">Appointment Date</label>
                <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
            </div>

            <div class="mb-3">
                <label for="appointmentTime" class="form-label">Appointment Time</label>
                <select class="form-control" id="appointmentTime" name="appointmentTime" required>
                    <option value="" disabled selected>Select a time</option>
                    @foreach($timeSlot as $t)
                        <option value="{{ $t }}">{{ $t }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="doctor" class="form-label">Select Doctor</label>
                <select class="form-select" id="doctor" name="doctor" required>
                    <option value="">-- Select a Doctor --</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>
            {{--
                
            <div class="mb-3">
                <label for="notes" class="form-label">Additional Notes</label>
                <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Enter any additional notes"></textarea>
            </div>
            --}}
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
    </div>
</div>
@endsection