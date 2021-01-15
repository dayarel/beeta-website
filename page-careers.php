<?php get_header(); ?>
    <section id="careers-header" class="first-section">
        <div class="container">
            <a data-scroll href="#roles-section"><?php the_field('top_link'); ?></a>
        </div>
    </section>
    <section id="careers-main">
        <div class="container">
        <?php if( have_rows('careers_sections') ):
              while( have_rows('careers_sections') ) : the_row(); ?>
              <div class="careers-section">
                <!-- Layout for one column -->
                <?php if( get_sub_field('careers_columns') === "1" ) { ?>
                        <div class="career-single">
                            <div class="row">
                                <div class="col-12">
                                    <img class="career-icon" src="<?php the_sub_field('career_icon');?>" alt="Career Section Icon" />
                                    <h1><?php the_sub_field('career_title');?></h1>
                                    <?php if( get_sub_field('career_subtitle') ): ?>
                                        <h2><?php the_sub_field('career_subtitle'); ?></h2>
                                    <?php endif; ?>
                                    <div class="career-copy">
                                    <?php the_sub_field('career_copy') ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    <?php } else {?>
                        <!-- Layout for two columns -->
                        <?php if (get_sub_field('career_inverse_layout')) { ?>
                            <div class="career-single career-reverse">
                        <?php } else { ?>
                            <div class="career-single">
                        <?php } ?>
                            <div class="row">
                                <div class="col-md-5">
                                    <img class="career-icon" src="<?php the_sub_field('career_icon');?>" alt="Career Section Icon" />
                                        <h1><?php the_sub_field('career_title');?></h1>
                                        <?php if( get_sub_field('career_subtitle') ): ?>
                                            <h2><?php the_sub_field('career_subtitle'); ?></h2>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="career-copy"><?php the_sub_field('career_copy') ?></div>
                                
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="career-image-wrapper">
                                        <img src="<?php the_sub_field('career_image'); ?>" alt="">
                                        <div class="career-image-shadow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<section id="roles-section">
    <div class="container">
        <h1>We're Hiring</h1>
        <div class="role-container">
            <div class="row">
            <?php if( have_rows('job_ads') ):
                $counter = 0;
                while( have_rows('job_ads') ) : the_row(); $counter++ ?>
                    <div class="col-md-6">
                        <div class="job-container">
                            <div class="job-bg-wrapper">
                            <div class="job-background" style="background-image:url('<?php the_sub_field('job_image'); ?>');"></div>
                            </div>
                            
                            <div class="job-content">
                                <a href="<?php the_sub_field('job_link'); ?>" target="_blank">
                                    <?php the_sub_field('job_title'); ?>
                                    <?php if(get_sub_field('job_copy')): ?>
                                        <span><?php the_sub_field('job_copy'); ?></span>
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="job-shadow shadow-<?php echo $counter; ?>"></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>