<?php get_header(); ?>
<section id="work-header" class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>A full stack digital design and software solutions agency based in the hive of Manchester, the digital capital of the North.</p>
            </div>
        </div>
    </div>
</section>
<section id="front-selected">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
            <div class="selected-wrapper">
                <?php
                    $loop = new WP_Query( array( 
                        'post_type' => 'casestudies',
                        'category_name' => 'case-featured',
                        'post_per_page' => 3  ) );
                    $counter = 0;
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); $counter++ ?>
                        <?php if ($counter % 2 != 0): ?>
                            <div class="selected-single selected-<?php the_field('project_color');?> d-md-flex flex-column-reverse align-items-center flex-md-row-reverse">
                        <?php else: ?>
                            <div class="selected-single selected-<?php the_field('project_color');?> d-md-flex flex-column-reverse flex-md-row align-items-center">
                        <?php endif; ?>
                                <div class="selected-single-left d-flex justify-content-center flex-column">
                                    <h1><?php the_field('client_name');?></h1>
                                    <h2><?php the_field('solution_title');?></h2>
                                    <p><?php the_field('solution_overview');?></p>
                                    <a href="<?php the_permalink(); ?>">Select Case Study ></a>
                                </div>
                                <div class="selected-single-right mt-4 mt-md-0">
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
                                <div class="selected-single-shadow shadow-<?php echo $counter; ?>"></div>
                            </div>
                        <?php endwhile; endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="front-clients">  
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 clients-partners">
                <h2>Some of our Client Partners</h2>
                <ul class="logos-slide">
                <?php
                    if( have_rows('clients_logos', 26) ):
                        while ( have_rows('clients_logos', 26) ) : the_row(); ?>
                            <li><img src="<?php the_sub_field('client_logo', 26);?>"  alt="Client Logo" /></li>
                        <?php endwhile;
                    endif;
                ?>
                </ul>
            </div>
        </div>
    </div>   
</section>   
<?php get_footer(); ?>