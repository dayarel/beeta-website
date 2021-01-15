        <?php if(!is_page('get-in-touch')): ?>
            <section id="contact-us-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Got a project?<a href="<?php echo site_url(); ?>/get-in-touch">Let's talk</a></h1>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <footer>
            <div class="remember">
                <p>Site designed by Zee Yousuf<br />Animated by Shohaib Iqbal</p>
            </div>
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar('first-footer-widget-area')){
                        dynamic_sidebar('first-footer-widget-area');
                    } ?>
                    <ul class="footer-social mt-3">
                        <?php if( have_rows('social_links','options') ):

                            while ( have_rows('social_links','options') ) : the_row(); ?>
                            <li><a href="<?php the_sub_field('social_link','options'); ?>" target='_blank'><i class="<?php the_sub_field('social_icon'); ?> fa-2x" aria-hidden="true"></i></a></li>
                            <?php endwhile;           
                            endif;
                        ?>
                    </ul>
                    </div> <!-- Remove this one when the social bar moves to another column and edit functions.php -->
                    <!-- <div class=" col-md-2 d-none d-md-block">
                        <ul class="footer-social">
                            <?php if( have_rows('social_links','options') ):

                                while ( have_rows('social_links','options') ) : the_row(); ?>
                                <li><a href="<?php the_sub_field('social_link','options'); ?>" target='_blank'><i class="<?php the_sub_field('social_icon'); ?> fa-2x" aria-hidden="true"></i></a></li>
                                <?php endwhile;           
                                endif;
                            ?>
                        </ul>
                    </div> -->
                    <?php if(is_active_sidebar('second-footer-widget-area')){
                        dynamic_sidebar('second-footer-widget-area');
                    } ?>
                    <!-- <div class="col-12 d-md-none">
                        <ul class="footer-social footer-social-mob">
                            <?php if( have_rows('social_links','options') ):

                                while ( have_rows('social_links','options') ) : the_row(); ?>
                                <li><a href="<?php the_sub_field('social_link','options'); ?>" target='_blank'><i class="<?php the_sub_field('social_icon'); ?> fa-3x" aria-hidden="true"></i></a></li>
                                <?php endwhile;           
                                endif;
                            ?>
                        </ul>
                    </div> -->
                </div>
                <div class="row footer-legal">
                    <div class="col-12 col-md-6">
                        <ul>
                            <li><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></li>
                            <li><a href="<?php echo site_url(); ?>/cookies">Cookies</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 mt-2 mt-md-0">
                        <p>Copyright Beeta Tech <?php echo date("Y"); ?> </p>
                    </div> 
                    
                    
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </body>
</html>