<footer class="site-footer">
    <div class="site-footer__inner container container--narrow">
        <div class="group">
            <!-- Column One -->
            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                    <a href="<?php echo site_url() ?>"><strong>Online</strong> University</a>
                </h1>
                <p><a class="site-footer__link" href="#">+234 706 737 3680</a></p>
            </div>

            <!-- Column Two and Three Group -->
            <div class="site-footer__col-two-three-group">
                <!-- Column Two -->
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">
                        <?php 
                        // Include custom menu for column two (Uncomment to enable)
                        // wp_nav_menu(array('theme_location' => 'footerLocationOne'));
                        ?>
                        <ul>
                            <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Campuses</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Column Three -->
                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">
                        <?php 
                        // Include custom menu for column three (Uncomment to enable)
                        // wp_nav_menu(array('theme_location' => 'footerLocationOne'));
                        ?>
                        <ul>
                            <li><a href="#">Legal</a></li>
                            <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Column Four -->
            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <!-- Social Media Icons -->
                        <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
