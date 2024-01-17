<?php
// Include the header
get_header();

// Loop through posts
while (have_posts()) {
    the_post();
    //Page Banner
    pageBanner();

?>



    <!-- Page Section Container -->
    <div class="container container--narrow page-section">
        <?php
        // Get the parent ID of the current post
        $theParent = wp_get_post_parent_id(get_the_ID());

        // Display metabox if post has a parent
        if ($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <!-- Link back to the parent page -->
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Back to <?php echo get_the_title($theParent); ?>
                    </a>
                    <!-- Display current page title -->
                    <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div>
        <?php } ?>

        <?php
        // Get an array of child pages
        $testarray = get_pages(array(
            'child_of' => get_the_ID()
        ));

        // Display page links if the post has a parent or child pages
        if ($theParent || $testarray) { ?>
            <div class="page-links">
                <h2 class="page-links__title">
                    <!-- Link to the parent page -->
                    <a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a>
                </h2>
                <ul class="min-list">
                    <?php
                    // Set the parent ID for listing child pages
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    }

                    // List child pages
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf,
                        'sort_column' => 'menu_order'
                    ));
                    ?>
                </ul>
            </div>
        <?php } ?>

        <!-- Display the content of the page -->
        <div class="generic-content">
<?php get_search_form(); ?>
        </div>

    <?php
}

// Include the footer
get_footer();
    ?>



