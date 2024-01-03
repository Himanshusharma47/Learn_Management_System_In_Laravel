@extends('superAdmin.layouts.main')

@section('add-teacher-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

           <!-- Content -->
          <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <div class="card shadow p-4 mb-4">
                  <h2> Add Teacher</h2>
                  
                  <!-- Course Creation Form -->
                    <form action="" method="post">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Name :</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="phone">Phone :</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                        </div> --}}

                        <div class="form-group mb-3">
                            <label for="sunjectCode">Subject Code :</label>
                            <input type="text" class="form-control" id="sunjectCode" name="sunjectCode" placeholder="Enter Subject Code">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
