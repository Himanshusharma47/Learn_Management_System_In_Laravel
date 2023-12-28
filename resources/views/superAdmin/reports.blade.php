@extends('superAdmin.layouts.main')

@section('report-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Reports</h1>
            </div>

            <!-- Overall Student Performance Report -->
            <div class="card mb-4">
                <div class="card-header">
                    Overall Student Performance
                </div>
                <div class="card-body">
                    <!-- Add content for the Overall Student Performance Report -->
                    <p>Content related to overall student performance...</p>
                </div>
            </div>

            <!-- Course Progress Report -->
            <div class="card mb-4">
                <div class="card-header">
                    Course Progress
                </div>
                <div class="card-body">
                    <!-- Add content for the Course Progress Report -->
                    <p>Content related to course progress...</p>
                </div>
            </div>


        </main>
    </div>
</div>

@endsection
