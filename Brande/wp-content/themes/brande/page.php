<?php get_header(); ?>

    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <section class="slider_bg">
          <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2><?php the_title(); ?></h2>
                    <span><?php custom_breadcrumbs(); ?> </span>
                </div>
            </div>
          </div>
        </section>

        <div class="container">
            <div class="row">
                
                <div class="col s12">
                    <div class="blog_page_content">

                        <?php the_content(); ?>

                    </div><!-- blog_page_content -->
                </div><!-- col-xs-16 -->

            </div><!-- row -->
        </div><!-- container -->

        <?php endwhile;?>
    
    </div><!-- main_site_content -->

<?php get_footer(); ?>