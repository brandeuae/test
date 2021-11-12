<?php 
	/*
		Template Name: Our Services
	*/
	get_header(); ?>

		<div id="main_site_content">

	        <?php if ( ! have_posts() ) : endif; ?>
	        <?php while ( have_posts() ) : the_post(); ?>

	        <section class="slider_inpa k_bg">
	          <div class="container">
	            <div class="row">
	                <div class="col s12">
	                	<div class="slkdfjr_fred">
		                    <h5><?php the_title(); ?></h5>
		                    <h1>How Can We Help You Brand</h1>                		
	                	</div>
	                </div>
	            </div>
	          </div>
	        </section>


	        <div class="container">
	            <div class="row">
	                
						<div class="our_services_kd serv_page">
							<?php
								$loop = new WP_Query( array(
								    'post_type' => 'services',
								    'posts_per_page' => 10,
								    'orderby' => 'menu_order'
								  )
								);
							?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<div class="ser_lkf">
									<?php if( get_field('service_icon') ): ?>
									<a href="<?php the_permalink() ?>">
										<div class="gk_tit">
											<h3><?php the_title() ?></h3>
											<img src="<?php the_field('service_icon'); ?>">
										</div>
										<div class="gk_desc">
											<p><?php the_field('service_description'); ?></p>
										</div>
									</a>
									<?php endif; ?>
								</div><!-- ser_lkf -->

							<?php endwhile; wp_reset_query(); ?>
						</div>

	                <div class="normal_empty_space"></div>    

	            </div><!-- row -->
	        </div><!-- container -->

	        <?php endwhile;?>
	    
	    </div><!-- main_site_content -->


<?php get_footer(); ?>