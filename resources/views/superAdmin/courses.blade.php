@extends('superAdmin.layouts.main')

@section('course-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Courses</h1>
            </div>

            <!-- Users Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Lecturer Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Dummy Data (Replace with actual data) -->
                    <tr>
                        <td>1</td>
                        <td>Neet</td>
                        <td>Dr. Puneet Kumar</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nihil qui unde consectetur dolorum nesciunt eos eligendi repellat, maxime amet.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Web develop</td>
                        <td>Dr. Rajinder Singh</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nihil qui unde consectetur dolorum nesciunt eos eligendi repellat, maxime amet.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Data Analyst</td>
                        <td>Mrs. Poonam Kaur</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nihil qui unde consectetur dolorum nesciunt eos eligendi repellat, maxime amet.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Accountant</td>
                        <td>Dr. Renu Devi</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et nihil qui unde consectetur dolorum nesciunt eos eligendi repellat, maxime amet.</td>
                        <td>
                            <button class="btn btn-primary btn-sm">View</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

@endsection
