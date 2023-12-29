@extends('teacher.layouts.main')

@section('course-create-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Create Courses, Lessons, Topics, and Assignments</h2>
              
                <!-- Course Creation Form -->
                <form>
                  <div class="form-group">
                    <label for="courseName">Course Name:</label>
                    <input type="text" class="form-control" id="courseName" placeholder="Enter Course Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="lesson">Lesson:</label>
                    <input type="text" class="form-control" id="lesson" placeholder="Enter Lesson">
                  </div>
              
                  <div class="form-group">
                    <label for="topic">Topic:</label>
                    <input type="text" class="form-control" id="topic" placeholder="Enter Topic">
                  </div>
              
                  <div class="form-group">
                    <label for="assignment">Assignment:</label>
                    <input type="text" class="form-control" id="assignment" placeholder="Enter Assignment">
                  </div>
              
                  <button type="submit" class="btn btn-primary">Create</button>
                </form>
              </div>
        </main>
    </div>
</div>

<!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
