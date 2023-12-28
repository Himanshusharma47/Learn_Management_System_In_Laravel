@extends('superAdmin.layouts.main')

@section('user-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Users</h1>
            </div>

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Course (for students)</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dummy Data (Replace with actual data) -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Student</td>
                        <td>Mathematics</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>Teacher</td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Student</td>
                        <td>Mathematics</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>Teacher</td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Student</td>
                        <td>Mathematics</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>Teacher</td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Student</td>
                        <td>Mathematics</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>Teacher</td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@endsection
