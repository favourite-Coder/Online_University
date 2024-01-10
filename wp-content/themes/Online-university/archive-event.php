<?php
get_header(); ?>

<!-- Page Banner -->
<div class="page-banner">
    <!-- Background image -->
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <!-- Page banner content -->
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">All Events</h1>
        <div class="page-banner__intro">
            <p>See what is going on in all our gatherings</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
  <?php
while(have_posts()) {
    the_post(); ?>

<div class="event-summary">
<a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month">
                            <?php
                            // Retrieve the event date for each event
                            $eventDate = new DateTime(get_field('event_date'));
                            ?>

                        </span>
                        <span class="event-summary__month"><?php echo $eventDate->format('M'); ?></span>
                        <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>
                    </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink(); ?>" 
                    class="nu gray">Learn more</a></p>
                </div>
            </div>

<?php }

echo paginate_links();
?></div>









<?php get_footer(); ?>
