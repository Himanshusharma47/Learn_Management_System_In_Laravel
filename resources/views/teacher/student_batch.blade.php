@extends('teacher.layouts.main')

@push('title')
  Student Batch
@endpush

@section('student-batch-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

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

            <div class="container mt-5">
                <h2>Create Student Batches and Assign Courses/Syllabus</h2>

                <!-- Batch Creation Form -->
                <div class="card shadow p-4 mb-4">
                    <h4 class="mb-4">Batch Creation Form</h4>
                    <form>
                        <div class="form-group mb-3">
                            <label for="batchName">Batch Name:</label>
                            <input type="text" class="form-control" id="batchName" placeholder="Enter Batch Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="courseSelection">Select Course:</label>
                            <select class="form-control" id="courseSelection" name="courseSelection">
                                <option value="Course 1">Course 1</option>
                                <option value="Course 2">Course 2</option>
                                <option value="Course 3">Course 3</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="syllabusSelection">Select Syllabus:</label>
                            <select class="form-control" id="syllabusSelection" name="syllabusSelection">
                                <option value="Syllabus 1">Syllabus 1</option>
                                <option value="Syllabus 2">Syllabus 2</option>
                                <option value="Syllabus 3">Syllabus 3</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="startDate">Start Date:</label>
                            <input type="date" class="form-control" id="startDate" name="startDate">
                        </div>

                        <div class="form-group mb-3">
                            <label for="endDate">End Date:</label>
                            <input type="date" class="form-control" id="endDate" name="endDate">
                        </div>

                        <button type="submit" class="btn btn-primary">Create Batch</button>
                    </form>
                </div>

                <!-- Dummy Data Display -->
                <div class="card shadow p-4">
                    <h4 class="mb-4">Sample Batch Assignment</h4>
                    <p><strong>Batch Name : </strong> Dummy Batch</p>
                    <p><strong>Assigned Course : </strong> Course 1</p>
                    <p><strong>Assigned Syllabus : </strong> Syllabus 1</p>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection
