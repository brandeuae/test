<?php 
	/* Template Name: Work */
	get_header(); ?>


    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <section class="slider_inpa">
          <div class="container">
            <div class="row">
                <div class="col s12">
                	<div class="slkdfjr_fred">
	                    <h5><?php the_title(); ?></h5>
	                    <h1>we specialize in creating brands that catch your eye!</h1>                		
                	</div>
                </div>
            </div>
          </div>
        </section>

        <div class="container">
            <div class="row">
                
                <div class="work_page_content">

					<div class="ifjr_dw_si clearfix">
						<?php
							$loop = new WP_Query( array(
							    'post_type' => 'showcases',
							    'posts_per_page' => -1,
							    'orderby' => 'menu_order'
							  )
							);
						?>

						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<div class="col l6 m6 12">
								<a href="<?php the_permalink() ?>" class="lfkjroo_cas_si">
			                        <?php // if (has_post_thumbnail( $post->ID ) ): ?>
			                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			                        <img src="<?php echo $image[0]; ?>" class="mfklr_cs">
			                        <?php // endif; ?>

			                        <div class="ld_skfmdr">
										<h5><?php the_title() ?></h5>
										<p class="mdoe_tit_si">
											<?php the_field('home_short_description'); ?>
										</p>
			                        </div>
								</a>
							</div>

						<?php endwhile; wp_reset_query(); ?>
					</div>

					<div class="normal_empty_space"></div>
                        
                </div><!-- work_page_content -->

            </div><!-- row -->
        </div><!-- container -->

        <?php endwhile;?>
    
    </div><!-- main_site_content -->

<?php get_footer(); ?>