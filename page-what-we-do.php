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
        </section>
        <section id="brand-core" class="first-section">
            <div class="container">
                <div class="row">
                    <?php if( have_rows('brand_build_beyond') ):
                        while ( have_rows('brand_build_beyond') ) : the_row();
                        $square_name = get_sub_field('wedo_motto_stage_name'); ?>
                        <div class="col-4">
                            <div id="core-<?php echo $square_name; ?>-icon" class="core-motto-icon core-motto-<?php echo $square_name; ?>"></div>
                            <div class="core-single core-<?php echo $square_name; ?> ">
                                <a href="#what-<?php echo $square_name; ?>"><?php echo $square_name; ?></a>
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
                <div class="container">  
                    <div class="feature-wrapper">  
                        <div class="motto-header">
                        <div class="motto-jarl">
                            <div class="motto-icon">
                                <div class="core-motto-<?php echo $motto_name; ?>"></div>
                            </div> 
                            <div class="motto-title">
                                <h1><?php the_sub_field('wedo_motto_stage_name');?></h1>    
                            </div>
                        </div>                            
                        <div class="motto-separator"></div>
                    </div>
                        
                    
                        <?php if (have_rows('motto_stage_content')):
                        $counter = 0;
                            while( have_rows('motto_stage_content') ): the_row(); $counter++; 
                            if ($counter === 4): ?>
                                <div class="motto-content motto-services core-<?php echo $square_name; ?>">
                            <?php else: ?>
                                <div class="motto-content core-<?php echo $square_name; ?>">
                                    <div class="motto-img animated-holder"></div>
                            <?php endif; ?>
                                    <div class="motto-copy">
                                        <h2><?php the_sub_field('motto_stage_header'); ?></h2>
                                        <?php if ($counter === 4): ?>
                                            <div class="motto-services-separator d-none d-md-block"></div>
                                        <?php endif; ?>
                                        <?php the_sub_field('motto_stage_copy'); ?>
                                    </div>
                                </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>