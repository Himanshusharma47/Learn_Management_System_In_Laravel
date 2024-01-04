@extends('teacher.layouts.main')

@section('course-create-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
          <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <div class="card shadow p-4 mb-4">
                  <h2>Create Courses, Lessons, Topics</h2>

                  <!-- Course Creation Form -->
                    <form action="{{ route('course.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="teacher_name">Teacher Name :</label>
                            <input  type="text" class="form-control" id="teacher_name" name="teacher_name" placeholder="Enter Teacher Name"  required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="course">Course Name :</label>
                            <input  type="text" class="form-control" id="course" name="course" placeholder="Enter Course Name"  required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="subject_name">Subject Name :</label>
                            <input  type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Enter Lesson" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="topic">Topic :</label>
                            <input  type="text" class="form-control" id="topic" name="topic" placeholder="Enter Topic" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description :</label>
                            <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="file_path">Upload File :</label>
                            <input  type="file" class="form-control" id="file_path" name="file_path" required/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="timeline">Timeline (in date):</label>
                            <input  type="date" class="form-control" id="timeline" name="timeline" placeholder="Enter Date" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
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

