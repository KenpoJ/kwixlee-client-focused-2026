<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">

<?php the_content(); ?>

<section class="about">
    <div class="content-container">
        <h2>About</h2>
        <div class="about-content">
            <div class="about-content_image">
                <?php echo get_the_post_thumbnail($post_ID = 59, 'medium'); ?>
            </div>
            <div class="about-content_text">
                <?php $excerpt = get_the_excerpt($post_ID = 59); ?>
                <?php echo $excerpt; ?>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>