<?php get_header(); ?>

    <?php $detect = new Mobile_Detect; ?>

    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <section class="slider_asc">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                		
                		<?php if( get_field('hide_title') ): ?>					
                		<h2 style="opacity: <?php the_field('hide_title'); ?> !important"><?php the_title(); ?></h2>
                		<?php endif; ?>
                		
                    </div>
                </div>
            </div>
            
            <?php if ( !$detect->isMobile() ) { ?>
            <?php if( get_field('header_background_image_sc') ): ?>
            <div class="sc_bg" style="background-image: url(<?php the_field('header_background_image_sc'); ?>);"></div>
            <?php endif; ?>
            <?php } ?>

            <?php if ( $detect->isMobile() ) { ?>
            <?php if( get_field('header_background_image_scm') ): ?>
            <div class="sc_bg" style="background-image: url(<?php the_field('header_background_image_scm'); ?>);"></div>
            <?php endif; ?>
            <?php } ?>

        </section>

        <div class="container">
            <div class="row">
                
                    <div class="blog_page_content_sc clearfix">

                        <?php if( get_field('client_logo') ): ?>
                            <div class="col l2 m12 s12">
                                <div class="dmkfjri_logo">
                                    <img src="<?php the_field('client_logo'); ?>">
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if( get_field('overview') ): ?>
                            <div class="col l7 m12 s12">
                                <div class="dmkfjri_fe">
                                    <h3>Overview</h3>
                                    <p class="kmfko_ov">
                                        <?php the_field('overview'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        $deliv = get_field('deliverable');
                        if( $deliv ): ?>

                            <div class="col l3 m12 s12">
                                <div class="dmkfjri_fe">
                                    <h3>Deliverable</h3>
                                    <div class="kmfko_ov">
                                        <ul>
                                            <?php foreach( $deliv as $color ): ?>
                                                <li><p><?php echo $color; ?></p></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div><!-- blog_page_content_sc -->

            </div><!-- row -->
        </div><!-- container -->



        <section id="sc_cont fluid_se" class="clearfix">

            <?php if( have_rows('content_sc') ): ?>
                <div id="mdlkjfr_fo">

                <?php while( have_rows('content_sc') ): the_row(); ?>
                    <div>

                        <?php if( have_rows('big_title_sc') ): ?>
                            <?php while( have_rows('big_title_sc') ): the_row(); ?>

                                <div class="s_tit center-align shod">
                                    <h3><?php the_sub_field('big_title_content_sc'); ?></h3>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if( have_rows('big_imageful_sc') ): ?>
                            <?php while( have_rows('big_imageful_sc') ): the_row(); ?>
                                <div class="big_imageful_sc">
                                    <img src="<?php the_sub_field('full_width_image'); ?>" class="lkfknri_full">
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if( have_rows('sc_desc') ): ?>
                            <?php while( have_rows('sc_desc') ): the_row(); ?>
                                <div class="klsldfjird_cont center-align">
                                    <div class="container">
                                        <div class="row">
                                            <p><?php the_sub_field('full_width_desc_sc'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>  

                <?php endwhile; ?>
                
                </div>
            <?php endif; ?>

        </section>



        <?php endwhile;?>
    
    </div><!-- main_site_content -->



    <section class="related_more">
        <div class="container">
            <div class="row">

    <?php
    global $post;
    $current_post_type = get_post_type( $post );

    // The query arguments
    $args = array(
        'posts_per_page' => 4,
        'order' => 'DESC',
        'orderby' => 'ID',
        'post_type' => $current_post_type,
        'post__not_in' => array( $post->ID )
    );

    // Create the related query
    $rel_query = new WP_Query( $args );

    // Check if there is any related posts
    if( $rel_query->have_posts() ) : ?>

        <div class="s_tit center-align shod">
            <h3>Explore More Projects</h3>
        </div>



            <div class="ifjr_dw clearfix">

                <?php while ( $rel_query->have_posts() ) : $rel_query->the_post(); ?>
                <div class="col l6 m6 12">
                    <a href="<?php the_permalink() ?>" class="lfkjroo_cas" title="<?php the_title() ?>" rel="bookmark">
                        <h3><?php the_title() ?></h3>

                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" class="mfklr_cs">
                        <?php endif; ?>

                        <div class="mdoe_tit">
                            <?php the_field('home_short_description'); ?>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>

            </div>


        <?php endif; wp_reset_query(); ?>
        
        <div class="def_but hos_er center-align">
    <a href="https://www.brande.ae/work/" title="See more projects">
        <span style="">See more projects</span>
        <svg version="1.1" class="arr_hov" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
            <g>
                <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line>
                <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline>
            </g>
        </svg>
    </a>
</div>
 

            </div>
        </div>
    </section>


    <?php get_template_part('sections/cta'); ?>
    

<?php get_footer(); ?>