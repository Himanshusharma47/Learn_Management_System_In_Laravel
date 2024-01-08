<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Sidebar Styles */
        #sidebar {
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        #sidebar .nav-link {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            transition: background-color 0.3s;
            color: #495057;
        }

        #sidebar .nav-link i {
            margin-right: 10px; /* Adjust icon spacing */
        }

        #sidebar .nav-link:hover {
            background-color: #bec7d0; /* Active link background color */
            color: #1e1111; /* Active link text color */
            /* background-color: #f8f9fa;
            color: #007bff; Change text color on hover */
        }

         /* Notification Badge Styles */
         #notification-badge {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border-radius: 50%;
        }

        .profile-photo {
            width: 30px; /* Set the desired width */
            height: 30px; /* Set the desired height */
            border-radius: 50%; /* Make it a circular photo */
            margin-right: 5px; /* Add some spacing between the photo and the text */
        }


        .bg-color{
            background: linear-gradient(to right, #FF4B2B, #FF416C);
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-color">
    <div class="container">
        <a class="navbar-brand" href="#">Super Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile')}}"> <img src="https://images.unsplash.com/flagged/photo-1553642618-de0381320ff3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTB8fG1lbnxlbnwwfHwwfHx8MA%3D%3D" alt="Profile Photo" class="profile-photo">
                    <strong>Profile</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout')}} "><strong>Logout</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation Bar -->

