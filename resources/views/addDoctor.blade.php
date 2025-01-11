@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Add New Doctor</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="/images/southern_clinic.jpg" class="img-fluid rounded" alt="Southern Clinic">
        </div>
        <br>
        <div class="col-sm-6">
            <form action="{{route('addDoctor.store')}}" method="post" enctype='multipart/form-data' >
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Doctor Name</label>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Specalization</label>
                    <input class="form-control" type="text" id="specialization" name="specialization" required>
                </div>
                <div class="form-group">
                    <label for="contactNumber">Contact Number</label>
                    <input class="form-control" type="text" id="contactNumber" name="contactNumber" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" type="file" id="image" name="image" >
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Add Doctor</button>            
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection