@extends('teacher.layouts.main')

@section('dummydata-section')
<div class="container-fluid">
    <div class="row">

@include('teacher.layouts.sidebar')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="container mt-5">
    <h2 class="mb-4">Hi, this page is for dummy data</h2>

    <form action="" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
        </div>
        
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" id="age" name="age" class="form-control" placeholder="Enter Age" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
        </div>
        
        <div class="mb-3">
            <label for="role" class="form-label">Select Option</label>
            <select name="role" id="role" class="form-select" required>
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="course" class="form-label">Select Category</label>
            <select name="course" id="course" class="form-select" required>
                <option value="bsc">Bsc</option>
                <option value="ba">Ba</option>
                <option value="bba">BBa</option>
                <option value="bcom">B.Com</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</main>
    </div>
</div>
@endsection 