@extends('teacher.layouts.main')

@section('lecture-summary-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h2>Post Lecture Summaries</h2>
              
                <!-- Lecture Summary Form -->
                <form>
                  <div class="form-group mb-3">
                    <label for="lectureDate">Lecture Date:</label>
                    <input type="date" class="form-control" id="lectureDate">
                  </div>
                  
                  <div class="form-group mb-3">
                    <label for="summary">Lecture Summary:</label>
                    <textarea class="form-control" id="summary" rows="4" placeholder="Enter Lecture Summary"></textarea>
                  </div>
              
                  <button type="submit" class="btn btn-primary">Post Summary</button>
                </form>
              
                <!-- Dummy Data Display -->
                <div class="mt-4">
                  <h4>Sample Lecture Summaries</h4>
                  <p><strong>Date:</strong> 2023-01-15</p>
                  <p><strong>Summary:</strong> Dummy summary for the lecture on Topic 1 and Topic 2.</p>
              
                  <p><strong>Date:</strong> 2023-01-16</p>
                  <p><strong>Summary:</strong> Another dummy summary for the lecture on Topic 3 and Topic 4.</p>
                </div>
              </div>
        </main>
    </div>
</div>

@endsection
