<?php get_header(); ?>
<section id="case-study-header" class="first-section">
    <div class="single-header-left">
        <div class="single-header" class="selected-single-left d-flex justify-content-center flex-column">
            <h1><?php the_field('client_name');?></h1>
            <p><?php the_field('single_client_content');?></p>
        </div>
    </div>
    <div class="single-header-right" style="background-image: url('<?php the_field("single_client_featured_picture") ;?>');">
    </div>
</section>
<section id="single-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Client</h2>
                <?php the_field('single_client_content'); ?>
            </div>
            <div class="col-md-4">
                <h2>Challenge</h2>
                <?php the_field('challenge'); ?>
            </div>
            <div class="col-md-4">
                <h2>Solution</h2>
                <?php the_field('our_solution'); ?>
            </div>
        </div>
    </div>
</section>
<?php if(get_field('single_motto_section')): ?>
    <section id="single-motto">
        <h1 class="section-title">Our role</h1>
        <div class="container">
            <div class="row">
                <?php
                    if (have_rows('single_motto_section')):
                        $counter = 0;
                        while( have_rows('single_motto_section') ): the_row(); $counter++ ?>
                            <div class="col-12 single-motto-stage">
                                <?php if ($counter%2 === 0): ?>
                                    <div class="row align-items-md-center single-motto-feature">
                                <?php else: ?>
                                    <div class="row flex-md-row-reverse single-motto-feature align-items-md-center">
                                <?php endif; ?>
                                    <div class="col-9 col-md-5">
                                        <div class="single-motto-state-dubidub">
                                            <h2><span class="d-inline-block d-md-none"></span><?php the_sub_field('single_motto_title'); ?></h2>
                                            <?php the_sub_field('single_motto_copy'); ?>
                                        </div>
                                    </div>

                                    <div class="col-3 col-md-2 d-none d-md-block hidden-dot">
                                    <div class="step-line"></div>
                                    <?php if ($counter%2 ===0): ?>
                                        <div class="step-horizontal-line"></div>
                                    <?php else: ?>
                                    <div class="step-horizontal-line-right"></div> 
                                    <?php endif;?>
                                </div>
                            <div class="core-motto-<?php the_sub_field('single_motto_title') ?> col-12 col-md-5 d-none d-md-flex"></div>
                        </div>
                   
                </div>
            <?php endwhile; endif; ?> 
        </div>
    </section>
<?php endif; ?>
<?php if(get_field('single_first_section_content')): ?>
    <section id="single-first-desc" class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php the_field('single_first_section_header'); ?></h1>
                </div>
                <div class="col-md-6">
                    <?php the_field('single_first_section_content'); ?>
                </div>
            
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="background-wrapper fw-image" style="background-image:url('<?php the_field('single_first_section_image_1'); ?>');"></div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="background-wrapper hw-image" style="background-image:url('<?php the_field('single_first_section_image_2'); ?>');"></div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="background-wrapper hw-image" style="background-image:url('<?php the_field('single_first_section_image_3'); ?>');"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if (get_field('single_quote_section_content')): ?> 
<section id="single-quote-one">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <?php the_field('single_quote_section_content'); ?>
                <p class="quote-author"><?php the_field('single_quote_section_person'); ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if (get_field('single_second_image_section_content')): ?>
    <section id="single-scroller" class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 single-scroller-left">
                    <?php the_field('single_second_image_section_content'); ?>
                </div>
                <div class="col-md-8 single-scroller-right">
                    <div class="row">
                        <?php
                        $count = 0;
                        if( have_rows('single_second_image_section_images') ):
                            while ( have_rows('single_second_image_section_images') ) : the_row(); $count++;
                            if ($count==1 || $count==2 || $count == 7):
                            ?>
                                <div class="col-12">
                                    <div class="background-wrapper fw-image mt-4" style="background-image:url('<?php the_sub_field('single_second_image_section_image'); ?>');"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-6">
                                    <div class="background-wrapper hw-image mt-4" style="background-image:url('<?php the_sub_field('single_second_image_section_image'); ?>');"></div>
                                </div>
                            <?php endif; ?> 
                            <?php endwhile;
                        endif;

                        ?>
                        <div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if (get_field('single_alternate_section')): ?>
<section id="single-alternate-content" class="white-bg">
    <div class="container">
        <?php
            $count = 0;
            if( have_rows('single_alternate_section') ):
                while ( have_rows('single_alternate_section') ) : the_row(); $count++;
                if ($count % 2 != 0): ?>
                    <div class="row flex-md-row-reverse ">
                <?php else: ?>
                    <div class="row">
                <?php endif; ?>
                    <div class="col-md-6">
                        <?php the_sub_field('single_alternate_section_content'); ?>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php the_sub_field('single_alternate_section_image'); ?>" alt="Case Study" />
                    </div>
                </div>
                <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif;?>
<section id="single-next" class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center link-container">
                
                <?php
                    $next_post = get_next_post();
                    if($next_post) { ?>
                        <span>Next project</span>
                        <?php $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                        echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="single-next-link">'. $next_title . '</a>' . "\n";
                    }
                ?>
                <a href="<?php echo get_home_url(); ?>/our-work" class="single-all">View all projects</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>