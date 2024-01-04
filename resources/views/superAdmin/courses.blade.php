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

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Code</th>
                        <th>Teacher Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dummy Data (Replace with actual data) -->
                    @foreach($courseData as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->course }}</td>
                        <td>{{ $item->subject_name}}</td>
                        <td>{{ $item->teacher_name }}</td>
                        <td>{{ Str::limit($item->description, 20) }}</td>
                        <td>
                            <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#viewModal_1">View</button>
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

@endsection
