@extends('superAdmin.layouts.main')

@section('communication-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Communication Form -->
            <div class="container-fluid">
            <h2 class="mt-4">Communication</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                    <h5 class="card-title mb-3">Send Message to Teacher</h5>
                    <!-- Communication Form -->
                    <form>
                        <div class="form-group mb-3">
                        <label for="teacherSelect">Select Teacher</label>
                        <select class="form-control" id="teacherSelect">
                            <option>Teacher 1</option>
                            <option>Teacher 2</option>
                            <option>Teacher 3</option>
                        </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="messageTextarea">Message</label>
                            <textarea class="form-control" id="messageTextarea" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    </div>
                </div>
                </div>
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
