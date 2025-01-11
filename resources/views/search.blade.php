@extends('layout')
@section('content')
<div class="text-center mb-4">
    <h1>Search an Appointment</h1>
    <p class="text-muted">Search the available date and time</p>
</div>

<div class="card">
    <div class="card-header bg-primary text-white text-center">
        Search a Date
    </div>
    <div class="card-body">
    <form action="{{route('search.results')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="appointmentDate" class="form-label">Select Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate" class="form-control" required value="{{ old('appointmentDate', $selectedDate ?? '') }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    @if(isset($appointments))
        
        @if($appointments->isEmpty())
            <br>
            <p>No appointments found for this date.</p>
        @else
            <h2 class="mt-4">Appointments on {{ $selectedDate }}</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Patient Name</th>
                        <th>Contact Number</th>
                        <th>Time</th>
                        <th>Doctor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $index => $appointment)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->contactNumber }}</td>
                            <td>{{ $appointment->appointmentTime }}</td>
                            <td>{{ $appointment->doctor }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
    </div>
</div>
@endsection