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
                  <h2>Create Subject</h2>

                  <!-- Course Creation Form -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="course_id">Select Course</label>
                            <select name="course_id" class="form-control" id="course_id">
                                <option selected>Courses</option>
                                {{-- @foreach ($teacherData as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="subject_name">Subject Name :</label>
                            <input  type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Enter Subject" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="subject_code">Subject Code :</label>
                            <input  type="text" class="form-control" id="subject_code" name="subject_code" placeholder="Enter Subject" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="description">Description :</label>
                            <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description" required></textarea>
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

