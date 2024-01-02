@extends('superAdmin.layouts.main')

@section('dashboard-section')


<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <!-- Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <!-- Add your content here -->

        <!-- Graphs Section -->
        <div class="container-fluid">
          <h2 class="mt-4">Overall Performance</h2>
          <!-- Add your graph components here -->
          <div class="row">

          <!-- Attendance Chart -->
          <div class="row mt-4">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Attendance</h5>
                          <!-- Canvas for Chart.js -->
                          <canvas id="attendanceChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Student Performance Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Student Performance</h5>
                            <!-- Canvas for Chart.js -->
                            <canvas id="performanceChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Progress Chart -->
            <div class="row mt-4 mb-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Course Progress</h5>
                        <!-- Canvas for Chart.js -->
                        <canvas id="courseProgressChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Recent Activity -->
             <div class="card mb-5">
                <div class="card-header">
                    Recent Activity
                </div>
                <div class="card-body">
                    <ul>
                        <li>Student A completed the "Introduction to Programming" course.</li>
                        <li>Student B submitted an assignment in the "Mathematics Basics" course.</li>
                        <li>Student C joined the "Advanced Science Concepts" course.</li>
                    </ul>
                </div>
            </div>
        </div>
      </main>
    </div>
  </div>

 <!-- Chart.js -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <!-- Your custom JavaScript for Dummy Graph Data -->
 <script>
   // Function to generate random data for graphs
   function generateRandomData() {
     var data = [];
     for (var i = 0; i < 5; i++) {
       data.push(Math.floor(Math.random() * 100) + 1);
     }
     return data;
   }

   // Dummy data for attendance
   var attendanceData = {
     labels: ['Module 1', 'Module 2', 'Module 3', 'Module 4', 'Module 5'],
     datasets: [{
       label: 'Attendance',
       data: generateRandomData(),
       backgroundColor: 'rgba(75, 192, 192, 0.2)',
       borderColor: 'rgba(75, 192, 192, 1)',
       borderWidth: 1
     }]
   };

   // Dummy data for student performance
   var performanceData = {
     labels: ['Module 1', 'Module 2', 'Module 3', 'Module 4', 'Module 5'],
     datasets: [{
       label: 'Student Performance',
       data: generateRandomData(),
       backgroundColor: 'rgba(255, 206, 86, 0.2)',
       borderColor: 'rgba(255, 206, 86, 1)',
       borderWidth: 1
     }]
   };

   // Get the context of the canvas elements
   var attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
   var performanceCtx = document.getElementById('performanceChart').getContext('2d');
   var courseProgressCtx = document.getElementById('courseProgressChart').getContext('2d');

   // Create attendance, performance, and course progress charts
   var attendanceChart = new Chart(attendanceCtx, {
     type: 'bar',
     data: attendanceData,
     options: {
       scales: {
         y: {
           beginAtZero: true,
           max: 100
         }
       }
     }
   });

   var performanceChart = new Chart(performanceCtx, {
     type: 'bar',
     data: performanceData,
     options: {
       scales: {
         y: {
           beginAtZero: true,
           max: 100
         }
       }
     }
   });

   var courseProgressData = {
     labels: ['Module 1', 'Module 2', 'Module 3', 'Module 4', 'Module 5'],
     datasets: [{
       label: 'Progress',
       data: generateRandomData(),
       backgroundColor: 'rgba(255, 99, 132, 0.2)',
       borderColor: 'rgba(255, 99, 132, 1)',
       borderWidth: 1
     }]
   };

   // Create a bar chart for course progress
   var courseProgressChart = new Chart(courseProgressCtx, {
     type: 'bar',
     data: courseProgressData,
     options: {
       scales: {
         y: {
           beginAtZero: true,
           max: 100
         }
       }
     }
   });
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
