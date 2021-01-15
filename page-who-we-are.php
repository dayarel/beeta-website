<?php get_header(); ?>
<section id="who-intro-section" class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php the_field('who_page_intro'); ?></h1>
            </div>
        </div>
    </div>
</section>
<section id="who-motto" class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 shift-image">
                <img src="<?php the_field('who_subintro_section_image');?>" alt="Who we are image" />
            </div>
            <div class="col-md-6 mt-5">
                <?php the_field('who_subintro_section_content'); ?>
            </div>
        </div>
    </div>
</section>
<section id="who-challenge">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php the_field('who_challenge_section_content'); ?>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="challenge-image-wrapper">
                    <?php
                        if( have_rows('who_challenge_section_images') ):
                            $count = 0;
                            while ( have_rows('who_challenge_section_images') ) : the_row(); $count++; 
                            if ($count < 2) : ?>
                            <div class="challenge-image-single challenge-image-left">
                                <div class="challenge-image" style="background-image: url('<?php the_sub_field("challenge_section_image"); ?>');"></div>
                            </div>
                            <div class="challenge-image-single challenge-image-right"> 
                            <?php else : ?>
                                <div class="challenge-image" style="background-image: url('<?php the_sub_field("challenge_section_image"); ?>');"></div>
                            <?php endif; ?>
                            
                            <?php endwhile;
                            
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="who-clients" class="white-bg roster-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php the_field('who_clients_section_content'); ?>
            </div>
            <div class="col-12">
                <div class="client-roster">
                <?php
                    if( have_rows('who_clients_section_logos') ):
                         while ( have_rows('who_clients_section_logos') ) : the_row(); ; ?>
                           <img src="<?php the_sub_field('clients_section_logo'); ?>" alt="Client Logo" /> 
                        <?php endwhile;
                    endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="who-values">
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-4">
                <div class="values-svg">
                <svg viewBox="0 0 593.444 692.283">
                <g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" data-name="Grupo 864">
                    <g data-name="Rectángulo 2756">
                    <path stroke="none" d="M530.131 570.967l-229.1417142 87.959263-87.959263-229.1417142 229.1417142-87.959263z"/>
                    <path d="M527.54710325 569.81657505l-225.4073925 86.5257912-86.5257912-225.40739249 225.40739249-86.5257912z"/>
                    </g>
                    <g data-name="Rectángulo 2753">
                    <path stroke="none" d="M442.585 412.155L181.297212 261.296 332.156212.008212l261.287788 150.859z"/>
                    <path stroke-width="3.99992" d="M441.853 409.423L184.029212 260.564l148.859-257.823788 257.823788 148.859z"/>
                    </g>
                    <g data-name="Rectángulo 2754">
                    <path stroke="none" d="M282.087 290.27H52.275V60.457h229.812z"/>
                    <path d="M280.087 288.27H54.275V62.457h225.812z"/>
                    </g>
                    <g data-name="Rectángulo 2757">
                    <path stroke="none" d="M311.74 536.413L155.8703309 692.2826691.0006618 536.413l155.8696691-155.8696691z"/>
                    <path d="M308.91157288 536.413L155.8703309 689.45424197 2.82908893 536.413 155.8703309 383.37175803z"/>
                    </g>
                </g>
                </svg>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Values</h1>
                <?php
                    if( have_rows('who_values_section') ):
                         while ( have_rows('who_values_section') ) : the_row(); ; ?>
                            <div class="value-single">
                                <?php the_sub_field('value_content'); ?>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="who-partners" class="white-bg roster-section">
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <?php the_field('who_partners_section_content'); ?>
        </div>
        <div class="col-md-10 offset-md-1">
        <div class="client-roster">
            <?php
                if( have_rows('who_partners_section_logos') ):
                        while ( have_rows('who_partners_section_logos') ) : the_row(); ; ?>
                        <img src="<?php the_sub_field('partner_section_logo'); ?>" alt="Client Logo" /> 
                    <?php endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</div>
</section>
<section id="bee-log" class="white-blog">
    <h1 class="section-title">Bee-log</h1>
    <div class="bee-log-container">
        <div class="container">
            <div class="row">
                <?php 
                    $args = array('post_type' => 'post', 'post__not_in' => array($post->ID),'posts_per_page' => 3 ); 
                        
                    $post_query = new WP_Query($args);
                        
                    if ($post_query->have_posts() ):
                        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <div class="col-12 col-md-4">
                        <?php 
                        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
                        <div class="bee-log-thumbnail" style="background-image: url('<?php echo $url[0]; ?>');"></div>
                        <div class="bee-log-meta d-flex">
                            <?php 
                            $categories = get_the_category();
                            if (!empty($categories)) : ?>
                                <p><?php echo esc_html($categories[0]->name); ?></p>
                            <?php endif; ?>
                            <div class="min-read"><?php echo do_shortcode('[rt_reading_time label="" postfix="MINS READ" postfix_singular="MIN READ"]'); ?></div>
                        </div>
                        <div class="bee-log-content">
                            <h1 class="semi"><?php the_title();?></h1>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>      
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="crounded-wrapper">
            <a href="#" class="crounded crounded-white">View Blog</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>