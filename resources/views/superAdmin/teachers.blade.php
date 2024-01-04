@extends('superAdmin.layouts.main')

@section('teacher-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Teachers</h1>
            </div>

            <div class="mb-3">
                <a href="{{ url('/add-teacher') }}"><button type="submit" class="btn btn-primary">Add Teacher</button></a>
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

@endsection
