@extends('teacher.layouts.main')

@section('student-batch-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Create Student Batches and Assign Courses/Syllabus</h2>
              
                <!-- Batch Creation Form -->
                <form>
                  <div class="form- mb-3">
                    <label for="batchName">Batch Name:</label>
                    <input type="text" class="form-control" id="batchName" placeholder="Enter Batch Name">
                  </div>
                  
                  <div class="form- mb-3">
                    <label for="courseSelection">Select Course:</label>
                    <select class="form-control" id="courseSelection">
                      <option>Course 1</option>
                      <option>Course 2</option>
                      <option>Course 3</option>
                    </select>
                  </div>
              
                  <div class="form- mb-3">
                    <label for="syllabusSelection">Select Syllabus:</label>
                    <select class="form-control" id="syllabusSelection">
                      <option>Syllabus 1</option>
                      <option>Syllabus 2</option>
                      <option>Syllabus 3</option>
                    </select>
                  </div>
              
                  <button type="submit" class="btn btn-primary">Create Batch</button>
                </form>
              
                <!-- Dummy Data Display -->
                <div class="mt-4">
                  <h4>Sample Batch Assignment</h4>
                  <p><strong>Batch Name : </strong> Dummy Batch</p>
                  <p><strong>Assigned Course : </strong> Course 1</p>
                  <p><strong>Assigned Syllabus : </strong> Syllabus 1</p>
                </div>
              </div>
        </main>
    </div>
</div>

@endsection
