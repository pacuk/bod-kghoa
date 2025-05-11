    <!-- Top navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-yellow border-bottom border-secondary">
        <div class="container-fluid position-relative">
        <!-- Hamburger toggler: only visible on small screens -->
        <button class="btn btn-outline-secondary me-2 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand (logo + company name) centered -->
        <a class="navbar-brand d-flex align-items-center position-absolute start-50 translate-middle-x" href="#" style="white-space: nowrap;">
            <img <img src="img/kg-coat-of-arms.png" alt="Logo" width="50" height="50" class="me-2">
            <span class="d-none d-md-block">Board of Directors</span>
        </a>

        <!-- Login/Logout button: always on the right -->
        <a class="btn btn-primary ms-auto" role="button" type="button">Login</a>
        </div>
    </nav>

    <!-- Offcanvas menu: only on small screens -->
    <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        </div>
    </div>

    <!-- Main layout: sidebar + content -->
    <div class="d-flex">
        <!-- Static sidebar: visible md+ -->
        <nav class="d-none d-md-block bg-yellow vh-100 border-end border-secondary" style="width: 250px;">
            <ul class="nav flex-column p-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-improvement-requests.php">Property Improvement Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="owners.php">Property Owners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="board-proposals.php">Board Proposals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="issues-tracking.php">Issues Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-info.php">Contact Info</a>
                </li>
            </ul>
        </nav>

        <!-- Page content -->
        <main class="flex-grow-1 p-3">
        

    <!--    <nav class="navbar navbar-expand-lg navbar-light bg-yellow border-bottom border-secondary-subtle">
            <div class="container-lg">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="img/kg-coat-of-arms.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                    KG Board of Directors
                </a>
                <button
                    class="navbar-toggler ms-auto"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasMenu"
                    aria-controls="offcanvasMenu"
                    aria-label="Toggle navigation">           
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="property-improvement-requests.php">Property Improvement Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="owners.php">Property Owners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="board-proposals.php">Board Proposals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="issues-tracking.php">Issues Tracking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact-info.php">Contact Info</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>-->
