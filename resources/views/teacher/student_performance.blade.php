@extends('teacher.layouts.main')

@push('title')
  Student Performance
@endpush

@section('student-performance-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

        <!-- Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <!-- Add your content here -->
        <div class="container mt-5">
          <h2>Student Performance Overview</h2>

          <!-- Performance Overview -->
          <div class="row mt-4">
            <div class="col-md-4">
              <h3>Course-wise Performance</h3>
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
              <h3>Topic-wise Performance</h3>
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
              <h3>Assignment-wise Performance</h3>
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

          <!-- Detailed Performance -->
          <div class="mt-4">
            <h3>Detailed Performance</h3>
            <table class="table">
              <thead>
                <tr>
                  <th>Student Name</th>
                  <th>Course 1</th>
                  <th>Course 2</th>
                  <th>Topic A</th>
                  <th>Topic B</th>
                  <th>Assignment 1</th>
                  <th>Assignment 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Student 1</td>
                  <td>85%</td>
                  <td>92%</td>
                  <td>88%</td>
                  <td>94%</td>
                  <td>85%</td>
                  <td>92%</td>
                </tr>
                <tr>
                  <td>Student 2</td>
                  <td>78%</td>
                  <td>89%</td>
                  <td>92%</td>
                  <td>88%</td>
                  <td>78%</td>
                  <td>89%</td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>

      </main>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
