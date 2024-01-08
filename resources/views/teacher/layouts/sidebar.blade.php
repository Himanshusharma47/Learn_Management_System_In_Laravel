<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light pt-3" style="height: auto;">
    <div class="position-sticky">
        <ul class="nav flex-column">

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('syllabus')}}">
                    <i class="fas fa-file-alt"></i> Syllabus Create
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{ route('subject.create.view')}}">
                    <i class="fas fa-book"></i> Subject Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('topic.create.view')}}">
                    <i class="fas fa-book"></i> Topic Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('all.courses')}}">
                    <i class="fas fa-file-alt"></i> Course View
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.batch')}}">
                    <i class="fas fa-users"></i> Students Batch
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('assignments')}}">
                    <i class="fas fa-tasks"></i> Assignments Create
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('assignments.review')}}">
                    <i class="fas fa-check-square"></i> Assignments Review
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('lecture.summary')}}">
                    <i class="fas fa-file-powerpoint"></i> Lecture Summary
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.attendance')}}">
                    <i class="fas fa-calendar-check"></i> Attendance
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('student.performance')}}">
                    <i class="fas fa-chart-bar"></i> Student Performance
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('overall.course.progress')}}">
                    <i class="fas fa-chart-line"></i> Overall Course Progress
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('teacher.message')}}">
                    <i class="fas fa-comments"></i> Messages
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Sidebar -->
