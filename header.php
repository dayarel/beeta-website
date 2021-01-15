<!DOCTYPE html>
<?php
    get_bloginfo('wpurl'); 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <header class="nav-header">
        <div class="custom-navbar container">
            <div class="row align-items-center">
                <div class="col-2">
                    <a class="beeta-logo" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/bee-logo.svg" /></a>
             
                </div>
                <div class="col-8">
                <?php if(!is_front_page()) : ?> 
                    <?php if (!is_singular('casestudies') && !is_singular('careers') && (is_single() || is_home())) : ?>
                        <h1 class="text-center">Bee-Log</h1>
                    <?php elseif(is_singular('careers')): ?>
                        <h1 class="text-center">Careers</h1>
                    <?php else: ?>
                        <h1 class="text-center"><?php the_title(); ?></h1>
                <?php endif;endif; ?> 
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <div class='menu'>
                        <span class='hamburger'></span>
                    </div> 
                </div>
        </div>         
        </div>
        
        <nav class="beeta-nav">
            <div class="menu-wrapper">
                <ul class="beeta-primary-nav">
                    <li class="nav-item active">
                        <a href="<?php echo site_url(); ?>/our-work">Our Work<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/who-we-are">Who We Are<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/what-we-do">What We Do<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/bee-log">Bee-Log<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/get-in-touch">Contact<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/careers">Careers<span>.</span></a>
                    </li>
                </ul>
                <div class="menu-social">
                    <ul>
                        <?php 
                            if( have_rows('social_links','options') ):

                               while ( have_rows('social_links','options') ) : the_row(); ?>
                               <li><a href="<?php the_sub_field('social_link','options'); ?>" target='_blank'><i class="<?php the_sub_field('social_icon'); ?> fa-2x" aria-hidden="true"></i></a></li>
                               <?php endwhile;           
                           endif;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    
</head>
<body <?php if (is_page(160)) { echo 'onload="initMap()" onunload="GUnload()"'; } ?> data-base-dir=<?php echo get_bloginfo('wpurl'); ?>>
<header class="nav-header">
        <div class="custom-navbar container">
            <div class="row align-items-center">
                <div class="col-2">
                    <a class="beeta-logo" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/bee-logo.svg" /></a>
             
                </div>
                <div class="col-8">
                <?php if(!is_front_page()) : ?> 
                    <?php if (!is_singular('casestudies') && !is_singular('careers') && (is_single() || is_home())) : ?>
                        <h1 class="text-center">Bee-Log</h1>
                    <?php elseif(is_singular('careers')): ?>
                        <h1 class="text-center">Careers</h1>
                    <?php else: ?>
                        <h1 class="text-center"><?php the_title(); ?></h1>
                <?php endif;endif; ?> 
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <div class='menu'>
                        <span class='hamburger'></span>
                    </div> 
                </div>
        </div>         
        </div>
        
        <nav class="beeta-nav">
            <div class="menu-wrapper">
                <ul class="beeta-primary-nav">
                    <li class="nav-item active">
                        <a href="<?php echo site_url(); ?>/our-work">Our Work<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/who-we-are">Who We Are<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/what-we-do">What We Do<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/bee-log">Bee-Log<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/get-in-touch">Contact<span>.</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>/careers">Careers<span>.</span></a>
                    </li>
                </ul>
                <div class="menu-social">
                    <ul>
                        <?php 
                            if( have_rows('social_links','options') ):

                               while ( have_rows('social_links','options') ) : the_row(); ?>
                               <li><a href="<?php the_sub_field('social_link','options'); ?>" target='_blank'><i class="<?php the_sub_field('social_icon'); ?> fa-2x" aria-hidden="true"></i></a></li>
                               <?php endwhile;           
                           endif;
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div class="front-sidebar d-none d-md-block"><a href="<?php echo site_url(); ?>/get-in-touch">Get In Touch</a></div>
    
