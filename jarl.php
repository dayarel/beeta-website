<?php if( have_rows('careers_sections') ):
              while( have_rows('careers_sections') ) : the_row(); ?>
            <div class="careers-section">
                <?php if( get_sub_field('careers_columns') === "1" ) { ?>
                    <div class="career-single">
                        <div class="row">
                            <div class="col-12">
                                <img class="career-icon" src="<?php the_sub_field('career_icon');?>" alt="Career Section Icon" />
                                <h1><?php the_sub_field('career_title');?></h1>
                                <?php if( get_sub_field('career_subtitle') ): ?>
                                    <h2><?php the_sub_field('career_subtitle'); ?></h2>
                                <?php endif; ?>
                                <?php the_sub_field('career_copy') ?>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php if (get_sub_field('career_inverse_layout') === "true") { ?>
                        <div class="career-single career-reverse">
                    <?php } else {?>
                        <div class="career-single">
                    <?php } ?>
                            <div class="row">
                                
                            </div>
                        </div>
                <?php }?>
            </div>
            <?php endwhile; endif; ?>