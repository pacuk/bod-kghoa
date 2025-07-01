<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-yellow">
        <div class="container-fluid position-relative">
        <!-- Hamburger toggler: only visible on small screens -->
        <button class="btn btn-outline-secondary me-2 d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand (logo + company name) centered -->
        <a class="navbar-brand d-flex align-items-center position-absolute start-50 translate-middle-x" href="<?php echo site_url().'/bod-dashboard/';?>" style="white-space: nowrap;">
            <img src="<?php echo get_template_directory_uri().'/img/kg-coat-of-arms.png';?>" alt="Logo" width="50" height="50" class="mx-2">
            <span class="d-none d-md-block">Board of Directors</span>
        </a>

        <!-- Login/Logout button: always on the right 
        <a class="btn btn-primary ms-auto" role="button" type="button">Logout</a>-->
            <?php echo bodkghoa_login_logout_button(); ?>
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
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/bod-dashboard/';?>">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/property-improvement-requests/';?>">Property Improvement Requests</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/issues-tracking/';?>">Issues Tracking</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/bod-proposals/';?>">Board Proposals</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/lot-owners/';?>">Lot Owners</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'/bod-contact-information/';?>">BOD Contact Info</a></li>
        </ul>
        </div>
    </div>

    <!-- Main layout: sidebar + content -->
    <div class="d-flex align-items-stretch">
        <!-- Static sidebar: visible md+ -->
        <nav class="d-none d-md-block bg-yellow min-vh-100" style="width:250px;">
            <ul class="nav flex-column p-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url().'/bod-dashboard/';?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url().'/property-improvement-requests/';?>">Property Improvement Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url().'/issues-tracking/';?>">Issues Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url().'/bod-proposals/';?>">Board Proposals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url().'/lot-owners/';?>">Lot Owners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url().'/bod-contact-information/';?>">BOD Contact Info</a>
                </li>
            </ul>
        </nav>

        <!-- Page content -->
        <main class="flex-grow-1 p-3 border-top border-bottom border-start">
            <div class="container-md">
                <div class="d-flex justify-content-end">
                    <?php echo do_shortcode('[searchwp_form id=1]'); ?>
                </div>
            </div>
            
