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
            <!-- Brand (logo + company name) centered -->
            <a class="navbar-brand d-flex align-items-center position-absolute start-50 translate-middle-x" href="<?php echo site_url(); ?>" style="white-space: nowrap;">
                <img src="<?php echo get_template_directory_uri().'/img/kg-coat-of-arms.png';?>" alt="Logo" width="50" height="50" class="mx-2">
                <span class="d-none d-md-block">Board of Directors</span>
            </a>
            <!-- Login/Logout button: always on the right -->
            <?php echo bodkghoa_login_logout_button(); ?>
            
        </div>
    </nav>

           <!-- Page content -->
        <main class="flex-grow-1 p-3 border-top border-bottom border-start">
