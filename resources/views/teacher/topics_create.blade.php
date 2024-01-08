@extends('teacher.layouts.main')

@push('title')
  Topic Create
@endpush

@section('topic-create-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

          <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <!-- Alert Messages Here-->
            @if (Session('success'))
                <div class="alert alert-success" id="popup">
                    {{ session('success') }}
                </div>
                @endif

            @if (Session('error'))
                <div class="alert alert-danger" id="popup">
                        {{ session('error') }}
                </div>
            @endif
            <!-- Alert Messages Here-->

            <div class="container mt-5">
                <div class="card shadow p-4 mb-4">
                  <h2>Create Topics</h2>

                  <!-- Course Creation Form -->
                    <form action="{{ route('topic.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="subject_id">Select Subject :</label>
                            <select name="subject_id" class="form-control" id="subject_id">
                                <option selected>Subjects</option>
                                @foreach ($subjectData as $item)
                                <option value="{{ $item->id }}">{{ $item->subject_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="topic">Topic :</label>
                            <input  type="text" class="form-control" id="topic" name="topic" placeholder="Enter Topic" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="file_path">Upload File :</label>
                            <input type="file" class="form-control" id="file_path" name="file_path" required/>
                            @error('file_path')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
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

