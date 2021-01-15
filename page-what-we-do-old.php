<?php get_header(); ?>

<div id="what-wrapper">
    <section id="what-intro">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="what-intro-wrapper">
                        <div id="joined-icons"></div>
                        <div class="what-intro-wrapper-content">
                            <?php the_field('wedo_page_intro'); ?>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        
        <!-- <span class="header scroll">SCROLL</span> -->
    </section>
    <section id="brand-core" class="first-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center core-slider">
                <?php if( have_rows('brand_build_beyond') ):
                    $counter = 1;
                    while ( have_rows('brand_build_beyond') ) : the_row();
                    $square_name = get_sub_field('wedo_motto_stage_name'); ?>
                ?>
                    <div class="col-md-4 col-lg-3">
                        <div id="core-<?php echo $square_name; ?>-icon" class="core-motto-icon core-motto-<?php echo $square_name; ?>"></div>
                        <div class="core-single core-<?php echo $square_name; ?> ">
                            <h1><span>0<?php echo $counter++; ?></span><?php echo $square_name; ?></h1>
                            <ul>
                                <?php if (have_rows('motto_stage_content')): $list=0;
                                    while( have_rows('motto_stage_content') ): the_row(); $list++ ?>
                                    <?php if ($list===1): ?>
                                        <li><i class="fas fa-arrow-right"></i><a href="#what-<?php echo $square_name; ?>"><?php echo $motto_name = get_sub_field('motto_stage_header'); ?></a></li>
                                    <?php elseif ($list ===4): 
                                        break;
                                        ?>
                                    <?php else: ?>
                                        <li><i class="fas fa-arrow-right"></i><a href="#<?php echo $square_name; ?>_<?php echo $list; ?>"><?php echo $motto_name = get_sub_field('motto_stage_header'); ?></a></li>
                                    <?php endif; ?>
                                <?php endwhile;endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile;endif; ?>
            </div> 
        </div>
    </section>
    <?php

        if( have_rows('brand_build_beyond') ):

            while ( have_rows('brand_build_beyond') ) : the_row();
            
            $motto_name = get_sub_field('wedo_motto_stage_name');
            $motto_header = get_sub_field('motto_stage_header');
            ?>

    <section id="what-<?php the_sub_field('wedo_motto_stage_name');?>" class="what-feature">
        <div class="motto-icon">
            <div class="core-motto-<?php echo $motto_name; ?>"></div>
        </div>
        <h1 class="section-title"><?php the_sub_field('wedo_motto_stage_name');?></h1>
        <div class="container">
            <div class="row">
                <?php if (have_rows('motto_stage_content')):
                    $counter = 0;
                    while( have_rows('motto_stage_content') ): the_row(); $counter++ ?>
                        <div class="col-12 motto-single-wrapper" id="<?php echo $motto_name ;?>_<?php echo $counter; ?>">
                            <?php if ($counter === 4): ?>
                            <div class="row">
                                <div class="col-9 col-md-6 offset-md-3">
                                    <div class="what-brand-single">
                                        <h2><span class="d-inline-block d-md-none"></span><?php the_sub_field('motto_stage_header'); ?></h2>
                                        <?php the_sub_field('motto_stage_copy'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <?php if ($counter%2 === 0): ?>
                                    <div class="row align-items-md-center what-single-feature">
                                <?php else: ?>
                                    <div class="row flex-md-row-reverse what-single-feature align-items-md-center">
                                <?php endif; ?>
                                <div class="col-9 col-md-5">
                                    <div class="what-brand-single">
                                        <h3><?php echo $motto_name ;?></h3>
                                        <h2><span class="d-inline-block d-md-none"></span><?php the_sub_field('motto_stage_header'); ?></h2>
                                        <?php the_sub_field('motto_stage_copy'); ?>
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
                                <div id="<?php echo $motto_name ;?>-<?php echo $counter-1; ?>" class="col-12 col-md-5 d-none d-md-flex animated-holder"></div>
                                </div>
                            <?php endif; ?>
                              
                        </div>
                <?php endwhile; endif;  ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php 
                        $post_object = get_sub_field('motto_first_stage_case');
                        if ($post_object):
                            $post = $post_object;
                            setup_postdata($post); ?>
                            <div class="selected-single d-md-flex flex-column-reverse flex-md-row align-items-center">
                                <div class="selected-single-left d-flex justify-content-center flex-column">
                                    <ul class="work-carousel">
                                        <?php
                                        if( have_rows('solution_images') ):
                                            while ( have_rows('solution_images') ) : the_row(); ?>
                                                <li><img src="<?php the_sub_field('case_studies_solution_image'); ?>"/></li>
                                           <?php endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                                <div class="selected-single-right mt-4 mt-md-0">
                                    <h1><?php the_field('client_name');?></h1>
                                    <h2><?php the_field('solution_title');?></h2>
                                    <p><?php the_field('solution_overview');?></p>
                                    <a href="<?php the_permalink(); ?>">Select Case Study ></a>
                                </div>
                                <div class="selected-single-shadow"></div>
                            </div>
                            
                    <?php 
                    wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php 

endwhile; endif; ?>
</div>

<?php get_footer(); ?>