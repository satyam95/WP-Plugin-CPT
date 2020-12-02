<?php 
 get_header(); ?>
<?php /* For Calling Left Sidebar */ ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>
    <?php get_sidebar(); ?>
<?php endif ?>
    
    <?php /* Displaying Single Post Details */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div id="primary" <?php astra_primary_class(); ?>>
            <div class="single-page-post-heading">
                <h1>Course Name: <?php the_title(); ?></h1>
                <h3>Course Fee: <?php echo get_post_meta( get_the_ID(), 'additional_informatiom_fee', true ) ?></h3>
                <h3>Course Duration: <?php echo get_post_meta( get_the_ID(), 'additional_informatiom_duration', true ) ?> </h3>
            </div>
        </div>
    <?php endwhile; ?>

<?php /* For calling Right Sidebar */ ?>
<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>
    <?php get_sidebar(); ?>
<?php endif ?>

<?php get_footer(); ?>
