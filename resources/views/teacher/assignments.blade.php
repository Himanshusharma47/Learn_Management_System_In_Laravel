@extends('teacher.layouts.main')

@section('assignments-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Create Assignment</h2>
              
                <!-- Assignment Creation Form -->
                <form>
                  <div class="form-group mb-3">
                    <label for="assignmentTitle">Assignment Title:</label>
                    <input type="text" class="form-control" id="assignmentTitle" placeholder="Enter Assignment Title">
                  </div>
                  
                  <div class="form-group mb-3">
                    <label for="marks">Total Marks:</label>
                    <input type="number" class="form-control" id="marks" placeholder="Enter Total Marks">
                  </div>
              
                  <div class="form-group mb-3">
                    <label for="questionFormat">Question Format:</label>
                    <textarea class="form-control" id="questionFormat" rows="4" placeholder="Enter Question Format"></textarea>
                  </div>
              
                  <div class="form-group mb-3">
                    <label for="submissionDeadline">Submission Deadline:</label>
                    <input type="datetime-local" class="form-control" id="submissionDeadline">
                  </div>
              
                  <button type="submit" class="btn btn-primary">Create Assignment</button>
                </form>
              
                <!-- Dummy Data Display -->
                <div class="mt-4">
                  <h4>Sample Assignment Details</h4>
                  <p><strong>Assignment Title:</strong> Dummy Assignment</p>
                  <p><strong>Total Marks:</strong> 100</p>
                  <p><strong>Question Format:</strong> Short Answer, Multiple Choice</p>
                  <p><strong>Submission Deadline:</strong> 2023-12-31 23:59</p>
                </div>
              </div>
        </main>
    </div>
</div>

<!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
