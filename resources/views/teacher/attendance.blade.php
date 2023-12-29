@extends('teacher.layouts.main')

@section('attendance-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Attendance Details</h2>
              
                <!-- Attendance Table -->
                <table class="table mt-4">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Student Name</th>
                      <th>Attendance Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Student 1</td>
                      <td>Present</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Student 2</td>
                      <td>Absent</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Student 3</td>
                      <td>Present</td>
                    </tr>
                    <!-- Add more rows as needed -->
                  </tbody>
                </table>
              
                <!-- Attendance Summary -->
                <div class="mt-4">
                  <h4>Attendance Summary</h4>
                  <p>Total Students: <strong>3</strong></p>
                  <p>Present: <strong>2 (66.67%)</strong></p>
                  <p>Absent: <strong>1 (33.33%)</strong></p>
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
