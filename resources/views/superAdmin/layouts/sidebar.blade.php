<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light pt-3" style="height: auto;">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('courses')}}">
                    <i class="fas fa-book"></i> Courses
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('classes')}}">
                    <i class="fas fa-chalkboard"></i> Classes
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('students')}}">
                    <i class="fas fa-user-graduate"></i> Students
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('teachers')}}">
                    <i class="fas fa-chalkboard-teacher"></i> Teachers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('communication')}}">
                    <i class="fas fa-comments"></i> Communication
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reports')}}">
                    <i class="fas fa-chart-bar"></i> Reports
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Sidebar -->
