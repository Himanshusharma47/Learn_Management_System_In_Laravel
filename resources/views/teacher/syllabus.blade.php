@extends('teacher.layouts.main')

@section('syllabus-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Syllabus Creation and Management</h2>
              
                <!-- Syllabus Form -->
                <form>
                  <div class="form-group">
                    <label for="courseTitle">Course Title:</label>
                    <input type="text" class="form-control" id="courseTitle" placeholder="Enter Course Title">
                  </div>
                  
                  <div class="form-group">
                    <label for="courseTimeline">Course Timeline:</label>
                    <input type="text" class="form-control" id="courseTimeline" placeholder="Enter Course Timeline (e.g., Weeks, Months)">
                  </div>
              
                  <div class="form-group">
                    <label for="topics">Topics:</label>
                    <textarea class="form-control" id="topics" rows="4" placeholder="Enter Topics (separated by commas)"></textarea>
                  </div>
              
                  <button type="submit" class="btn btn-primary">Create Syllabus</button>
                </form>
              
                <!-- Dummy Data Display -->
                <div class="mt-4">
                  <h4>Sample Syllabus</h4>
                  <p><strong>Course Title:</strong> Dummy Course</p>
                  <p><strong>Course Timeline:</strong> 12 Weeks</p>
                  <p><strong>Topics:</strong> Topic 1, Topic 2, Topic 3</p>
                </div>
              </div>
        </main>
    </div>
</div>

@endsection
