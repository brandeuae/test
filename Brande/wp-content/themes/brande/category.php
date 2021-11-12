<?php get_header(); ?>


    <div id="main_site_content">

        <section class="slider_inpa">
          <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="slkdfjr_fred">
                        <h5><?php single_cat_title(); ?></h5>
                        <h1>Articles to feed your mind.</h1>                      
                    </div>
                </div>
            </div>
          </div>
        </section>

                

        <div class="container">
            <div class="row">
                
                <div class="col s12">
                    <div class="blog_page_content clearfix">

                        <?php if(have_posts()) : while(have_posts()) : the_post();
                            $thumb = get_post_thumbnail_id();
                            $img_url = wp_get_attachment_url( $thumb,'full' );
                            $image = aq_resize( $img_url, 450, 250, true );
                        ?>

                        <div class="col l6 m6 s12">
                            <a href="<?php the_permalink(); ?>" class="cokjsdf_er">
                                <div class="sdklfjr_ess">
                                    <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
                                    <div class="csdmflk_frdate">
                                        <?php echo get_the_date(); ?>
                                    </div>
                                </div>
                                <div class="aslkdjie_ds">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php echo excerpt(30); ?>
                                    </p>
                                </div>                                
                            </a>
                        </div>

                        <?php endwhile; else : ?>

                            <h4 class="nothing"><?php pll_e('Sorry, There are no topics in this category yet!'); ?></h4>
                            <p style="margin-bottom: 0;"><?php pll_e('We are sorry but there are currently no topics in this category.'); ?></p>

                        <?php endif; ?>


                        <div id="pagination"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
                            
                    </div><!-- blog_page_content -->
                </div><!-- col-xs-16 -->

            </div><!-- row -->
        </div><!-- container -->

    
    </div><!-- main_site_content -->

    <div class="normal_empty_space"></div>

<?php get_footer(); ?>