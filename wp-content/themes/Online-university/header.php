<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Section -->
<header class="site-header">
    <div class="container">
        <!-- Site Logo -->
        <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>"><strong>Online</strong> University</a>
        </h1>
        
        <!-- Search and Menu Triggers -->
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        
        <!-- Site Navigation Menu -->
        <div class="site-header__menu group">
            <nav class="main-navigation">
                <?php 
                // Include custom menu if registered (Uncomment to enable)
                // wp_nav_menu(array('theme_location' => 'footerLocationTwo'));
                ?>
                <ul>
                    <!-- Main Menu Items -->
                    <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 15) 
                    echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Campuses</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            
            <!-- Utility Links -->
            <div class="site-header__util">
                <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</header>
