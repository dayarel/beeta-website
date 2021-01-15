<?php get_header(); ?>
<!-- Blog category menu || Temporarily removed from template
<section id="blog-categories" class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <ul>
                    <?php if(is_page('home')): ?>
                        <li class="cat-item current-cat"><a href="<?php echo get_home_url();?>/bee-log">All</a></li>
                    <?php else: ?>
                        <li class="cat-item current-cat"><a href="<?php echo get_home_url();?>/bee-log">All</a></li>
                    <?php endif; ?>
                    <?php wp_list_categories( array(
                        'show_count' => false,
                        'taxonomy'   => 'category',
                        'exclude'    => array(3),
                        'title_li' => ''
                    ) ); ?> 
                </ul>
            </div>
        </div>
    </div>
</section>
-->
<section id="blog-main-container" class="blog-alihera first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Featured</h2>
                <div class="post-container">
                <?php $catquery = new WP_Query( 'cat=3&posts_per_page=1' ); ?>
        
                    
                    <?php while($catquery->have_posts()) : $catquery->the_post();
                     $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                    <div class="featured-content-wrapper post-content-wrapper">
                        <div class="bee-log-thumbnail" style="background-image: url('<?php echo $url[0]; ?>');"></div>
                        <div class="bee-log-meta d-flex">
                            <?php 
                            $categories = get_the_category();
                            if (!empty($categories)) : ?>
                                <p><?php echo esc_html($categories[0]->name); ?><span class="post-date"><?php the_date(); ?></span></p>
                                
                            <?php endif; ?>
                            <div class="min-read"><?php echo do_shortcode('[rt_reading_time label="" postfix="MINS READ" postfix_singular="MIN READ"]'); ?></div>
                        </div>
                        <div class="bee-log-content">
                            <a href="<?php the_permalink(); ?>" class="semi"><?php the_title();?></a>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <div class="post-author">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                <h3>By <?php the_author(); ?></h3>
                            </div>
                            
                        </div>
                    </div>
                <?php endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <h2>Recent Stories</h2>
                <div class="post-container rolling-posts">
                    <?php 
                        query_posts('showposts=6');
                        $ids = array();
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                $ids[] = get_the_ID();
                                $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bee-log-thumbnail" style="background-image: url('<?php echo $url[0]; ?>');"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content-wrapper">
                                            <div class="bee-log-meta">
                                                <?php 
                                                $categories = get_the_category();
                                                if (!empty($categories)) : ?>
                                                    <p><?php echo esc_html($categories[0]->name); ?></p>
                                                <?php endif; ?>
                                                <div class="min-read"><?php echo do_shortcode('[rt_reading_time label="" postfix="MINS READ" postfix_singular="MIN READ"]'); ?></div>
                                            </div>
                                            <div class="bee-log-content">
                                                <a href="<?php the_permalink(); ?>" class="semi"><?php the_title();?></a>
                                                <div class="post-author">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                                    <h3>By <?php the_author(); ?></h3>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="more-posts" class="blog-alihera d-none d-md-block">
    <h1 class="section-title">More from Beeta</h1>
    <div class="container post-container">
        <div class="row">
        <?php 
        query_posts(array('post__not_in' => $ids));
        while (have_posts()): the_post(); ?>
            <div class="col-md-4">
                <div class="bee-log-thumbnail" style="background-image: url('<?php echo $url[0]; ?>');"></div>
                <div class="post-content-wrapper">
                    <div class="bee-log-meta">
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) : ?>
                            <p><?php echo esc_html($categories[0]->name); ?></p>
                        <?php endif; ?>
                        <div class="min-read"><?php echo do_shortcode('[rt_reading_time label="" postfix="MINS READ" postfix_singular="MIN READ"]'); ?></div>
                    </div>
                    <div class="bee-log-content">
                        <a href="<?php the_permalink(); ?>" class="semi"><?php the_title();?></a>
                        <div class="post-author">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                            <h3>By <?php the_author(); ?></h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php endwhile; ?>           
        </div>
    </div>
</section>
<?php get_footer(); ?>