<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light pt-3" style="height: auto;">
    <div class="position-sticky">
        <ul class="nav flex-column">

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/syllabus')}}">
                    <i class="fas fa-file-alt"></i> Syllabus Create
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/courses')}}">
                    <i class="fas fa-book"></i> Course Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/all-courses')}}">
                    <i class="fas fa-file-alt"></i> Course View
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/batch')}}">
                    <i class="fas fa-users"></i> Students Batch
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/assign')}}">
                    <i class="fas fa-tasks"></i> Assignments Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/assign-review')}}">
                    <i class="fas fa-check-square"></i> Assignments Review
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/lecture')}}">
                    <i class="fas fa-file-powerpoint"></i> Lecture Summary
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/attend')}}">
                    <i class="fas fa-calendar-check"></i> Attendance
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/std-perf')}}">
                    <i class="fas fa-chart-bar"></i> Student Performance
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/overall-course')}}">
                    <i class="fas fa-chart-line"></i> Overall Course Progress
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/convo')}}">
                    <i class="fas fa-comments"></i> Teachers Convo
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Sidebar -->
