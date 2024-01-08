@extends('superAdmin.layouts.main')

@push('title')
  Teacher
@endpush


@section('teacher-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Alert Messages Here-->
            @if (Session('success'))
                <div class="alert alert-success" id="popup">
                    {{ session('success') }}
                </div>
                @endif

            @if (Session('error'))
                <div class="alert alert-danger" id="popup">
                        {{ session('error') }}
                </div>
            @endif
            <!-- Alert Messages Here-->

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Teachers</h1>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary"  data-toggle="modal"  data-target="#addTeacherModal">Add Teacher</button></a>
            </div>

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dummy Data (Replace with actual data) -->
                    @foreach ($teacherData as $item )
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->age }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<!-- Modal for Adding New Course -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCourseModalLabel">Add New Teacher</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields here -->
                <form action="{{ route('add.teacher') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role" value="teacher">

                    <div class="form-group mb-3">
                        <label for="name">Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div>

                    <div class="form-group mb-3">
                        <label for="age">Age :</label>
                        <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age ">
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password :</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password ">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
