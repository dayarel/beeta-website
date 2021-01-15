<?php
/* Template Name: Legal */

get_header();?>

<section id="legal-wrapper" class="first-section">
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>