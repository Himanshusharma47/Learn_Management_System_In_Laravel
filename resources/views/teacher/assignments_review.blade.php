@extends('teacher.layouts.main')

@push('title')
  Assignment Review
@endpush

@section('assignments-review-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

<div class="container mt-5">
    <h2>Assignment Review & Student Performance</h2>

    <!-- Assignment Review Table -->
    <h3 class="mt-4">Assignment Review</h3>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Assignment Title</th>
          <th>Student Name</th>
          <th>Submission Date</th>
          <th>Marks Obtained</th>
          <th>Review</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Assignment 1</td>
          <td>Student 1</td>
          <td>2023-01-20</td>
          <td><input type="number" class="form-control" value="85"></td>
          <td><textarea class="form-control" rows="2">Good effort. Address the minor issues mentioned.</textarea></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Assignment 2</td>
          <td>Student 2</td>
          <td>2023-01-22</td>
          <td><input type="number" class="form-control" value="92"></td>
          <td><textarea class="form-control" rows="2">Excellent work!</textarea></td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>

    <!-- Student Performance Section -->
    <h3 class="mt-4">Student Performance</h3>
    <div class="row">
      <div class="col-md-4">
        <h5>Course-wise Performance</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Course 1
            <span class="badge badge-primary badge-pill">85%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Course 2
            <span class="badge badge-primary badge-pill">92%</span>
          </li>
          <!-- Add more courses as needed -->
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Topic-wise Performance</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Topic A
            <span class="badge badge-primary badge-pill">88%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Topic B
            <span class="badge badge-primary badge-pill">94%</span>
          </li>
          <!-- Add more topics as needed -->
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Assignment-wise Performance</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Assignment 1
            <span class="badge badge-primary badge-pill">85%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Assignment 2
            <span class="badge badge-primary badge-pill">92%</span>
          </li>
          <!-- Add more assignments as needed -->
        </ul>
      </div>
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
