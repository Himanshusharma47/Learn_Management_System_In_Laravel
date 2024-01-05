@extends('superAdmin.layouts.main')

@section('course-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Courses</h1>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCourseModal">Add Course</button>
            </div>            

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Code</th>
                        <th>Teacher Name</th>
                        <th>Students</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dummy Data (Replace with actual data) -->
                    @foreach($courseData as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->course_name}}</td>
                        <td>{{ $item->course_code }}</td>
                        <td>{{ $item->teacher->name }}</td>
                        <td>{{ $item->students }}</td>
                        <td>{{ $item->duration }}</td>
                        <td>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewModal_1">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>


<!-- Modal for Viewing Full Details -->
<div class="modal fade" id="viewModal_1" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel_1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel_1">Course Details</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                </button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> 1</p>
                <p><strong>Course:</strong> B.Com</p>
                <p><strong>Code:</strong> DCAP306</p>
                <p><strong>Lecturer Name:</strong> Dr. Puneet Kumar</p>
                <p><strong>Description:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nihil qui unde consectetur dolorum nesciunt eos eligendi repellat, maxime amet.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding New Course -->
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCourseModalLabel">Add New Course</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields here -->
                <form action="{{ route('course.create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="course_code" class="form-label">Course Code</label>
                        <input type="text" class="form-control" id="course_code" name="course_code" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="teacher_id">Select Teacher</label>
                        <select name="teacher_id" class="form-control" id="teacher_id">
                            <option selected>Teachers</option>
                            @foreach ($teacherData as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="students" class="form-label">Students Enrolled </label>
                        <input type="text" class="form-control" id="students" name="students" required>
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
