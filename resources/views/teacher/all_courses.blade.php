@extends('teacher.layouts.main')

@push('title')
  All Courses
@endpush

@section('course-view-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

        <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Manage Courses</h2>

                <!-- Display a table of courses -->
                <table class="table">
                    <thead>
                        <tr>

                            <th>Course Name</th>
                            <th>Subject Name</th>
                            <th>Topic Name</th>
                            <th>Timeline</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($courses as $course) --}}
                            <tr>
                                <td>course_name</td>
                                <td>subject_name</td>
                                <td>topic_name</td>
                                <td>timeline</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <!-- Add a delete link or button as needed -->
                                </td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@endsection
