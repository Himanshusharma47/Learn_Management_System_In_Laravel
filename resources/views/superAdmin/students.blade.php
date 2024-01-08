@extends('superAdmin.layouts.main')

@push('title')
  Students
@endpush


@section('course-section')

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
                <h1 class="h2">Students</h1>
            </div>

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Course (for students)</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($studentData as $item )
                    <tr>
                      <td>{{ $item->id}}</td>
                      <td>{{ $item->name}}</td>
                      <td>{{ $item->email}}</td>
                      <td>{{ $item->course}}</td>
                      <td>{{ $item->age}}</td>
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
