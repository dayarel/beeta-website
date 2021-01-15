<?php get_header(); ?>
<section id="single-header" class="first-section blog-alihera">
    <div class="container post-container">
        <div class="row post-content-wrapper">
            <div class="col-md-8 offset-md-2">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()) : the_post(); 
                        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                        <header class="bee-log-meta">
                            <div class="single-meta d-flex">
                                <?php $categories = get_the_category();
                                if (!empty($categories)) : ?>
                                    <p><?php echo esc_html($categories[0]->name); ?><span class="post-date"><?php the_date(); ?></span></p>
                                    
                                <?php endif; ?>
                                <div class="min-read"><?php echo do_shortcode('[rt_reading_time label="" postfix="MINS READ" postfix_singular="MIN READ"]'); ?></div>
                            </div>
                            <h1><?php the_title(); ?></h1>
                            <h3><?php echo get_the_excerpt(); ?></h3>
                            <div class="post-author">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                <h3>By <?php the_author(); ?></h3>
                            </div>
                        </header>
                
            </div>
            <div class="w-100"></div>
            <div class="col-12">
            <div class="bee-log-thumbnail" style="background-image: url('<?php echo $url[0]; ?>');"></div>
            </div>
            <?php endwhile;endif;
                    wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
<section id="single-body" class="white-bg">
    <div class="container">
        <div class="single-social-bar">
            <?php echo do_shortcode('[Sassy_Social_Share]'); ?>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
            <?php if (have_posts()): ?>
                    <?php while(have_posts()) : the_post(); 
                        the_content();
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>