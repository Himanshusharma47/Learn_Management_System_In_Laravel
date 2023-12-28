@extends('superAdmin.layouts.main')

@section('dashboard-section')


<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <!-- Main Content Area -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>

            <!-- Course Progress Graph -->
            <div class="card mb-4">
                <div class="card-header">
                    Course Progress
                </div>
                <div class="card-body">
                    <canvas id="courseProgressChart" width="300" height="150"></canvas>
                </div>
            </div>

            <!-- Student Monitoring Graph -->
            <div class="card mb-4">
                <div class="card-header">
                    Student Monitoring
                </div>
                <div class="card-body">
                    <canvas id="studentMonitoringChart" width="300" height="150"></canvas>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="card">
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
        </main>
    </div>
</div>

<!-- Your JavaScript to initialize and update the charts -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Course Progress Chart
        var ctxCourseProgress = document.getElementById('courseProgressChart').getContext('2d');
        var courseProgressChart = new Chart(ctxCourseProgress, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                datasets: [{
                    label: 'Course Progress',
                    data: [50, 60, 75, 80, 90, 85, 95],
                    borderColor: 'rgb(75, 192, 192)',
                    borderWidth: 2,
                    fill: false
                }]
            }
        });

        // Initialize Student Monitoring Chart
        var ctxStudentMonitoring = document.getElementById('studentMonitoringChart').getContext('2d');
        var studentMonitoringChart = new Chart(ctxStudentMonitoring, {
            type: 'bar',
            data: {
                labels: ["Math", "Science", "English", "History", "Programming"],
                datasets: [{
                    label: 'Student Monitoring',
                    data: [85, 78, 92, 88, 95],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
