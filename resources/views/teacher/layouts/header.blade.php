<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your LMS Title</title>
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
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Teacher Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a id="notification-link" class="nav-link" href="#">Notifications <span id="notification-badge" class="badge rounded-pill bg-danger">5</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/t-profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation Bar -->

<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your notification messages here -->
                <p>Teacher A sent you a message: "Lorem ipsum dolor sit amet."</p>
                <p>Teacher B sent you a message: "Consectetur adipiscing elit."</p>
            </div>
        </div>
    </div>
</div>

<script>
    // Call this function to show the notification modal
    function showNotificationModal() {
        var notificationModal = new bootstrap.Modal(document.getElementById('notificationModal'));
        notificationModal.show();
    }
</script>
