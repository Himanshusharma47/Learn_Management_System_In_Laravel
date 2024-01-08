@extends('superAdmin.layouts.main')

@section('profile-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Profile</h1>
            </div>

            <!-- Profile Section -->
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <!-- Profile Box with Shadow -->
                    <div class="profile-box p-4 shadow">
                        <!-- Profile Image -->
                        <img src="https://images.unsplash.com/flagged/photo-1553642618-de0381320ff3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTB8fG1lbnxlbnwwfHwwfHx8MA%3D%3D" style="width: 150px; height: 150px; object-fit: cover;" alt="Profile Image" class="img-fluid rounded-circle mb-3">

                        <h3>{{$adminData->name}}</h3>

                        <p>Email: {{$adminData->email}}</p>
                        <p>Age: {{$adminData->age}}</p>

                        <p>Role: Super Admin</p>
                        <p>Joined: January 1, 2022</p>

                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
                    </div>
                </div>
            </div>
            <!-- End Profile Section -->

        </main>

    </div>
</div>

<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Edit Profile Form (Add form elements as needed) -->
                <form method="post" action="{{ url('admin-profile-update/'. $adminData->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" value="{{ $adminData->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="edit_age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="edit_age" name="age" value="{{ $adminData->age }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
