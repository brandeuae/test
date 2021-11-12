<?php get_header(); ?>

    <?php $detect = new Mobile_Detect; ?>


	<section id="main_sli">
		<div class="owl-carousel" id="kjfor_frkgas">

			<?php $loop = new WP_Query( array(
			    'post_type' => 'main_slider',
			    'posts_per_page' => 4,
			    'orderby' => 'menu_order'
			  )
			);
			?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php if ( !$detect->isMobile() ) { ?>
			<div class="sli_it" style="background-image: url('<?php the_field('slider_background'); ?>');">
			<?php } ?>
			
			<?php if ( $detect->isMobile() ) { ?>
			<div class="sli_it" style="background-image: url('<?php the_field('mobile_background_der'); ?>');">
			<?php } ?>
			
			    <?php if( get_field('project_link') ): ?>
			    <a href="<?php the_field('project_link'); ?>" class="sli_link"></a>
			    <?php endif; ?>
			    
				<div class="container">
					<div class="sli_cont">
						<div class="dloe">

					        <?php if( get_field('small_head') ): ?>
					          <div class="kfir_tit"><?php the_field('small_head'); ?></div>
					        <?php endif; ?>

					        <?php if( get_field('main_title') ): ?>
								<div class="klfiee_fu"><?php the_field('main_title'); ?></div>
					        <?php endif; ?>

							<ul class="sli_but">
						        <?php if( get_field('first_button_sl') ): ?>				        
								<li>
									<div class="def_but bg_btn lets_talk_s">
										<a href="<?php the_field('first_button_sl_link'); ?>" title="Let's Talk">
										    <span><?php the_field('first_button_sl'); ?></span>
										    <svg version="1.1" class="arr_hov" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
										        <g>
										            <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line>
										            <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
										        </g>
										    </svg>
										</a>
									</div>
								</li>
					        	<?php endif; ?>

					        	<?php if( get_field('sec_button_sl') ): ?>
								<li>
									<div class="def_but bg_white vi_wor">
										<a href="<?php the_field('sec_button_sl_link'); ?>" class="vi_works" title="View Our Work">
										    <span><?php the_field('sec_button_sl'); ?></span>
										    <svg version="1.1" class="arr_hov" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
										        <g>
										            <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line>
										            <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
										        </g>
										    </svg>
										</a>
									</div>
								</li>
								<?php endif; ?>
							</ul>

						</div>
					</div>
				</div>
				
				<div class="be_boldte">
				    Be Bold
				</div>
			</div>

			<?php endwhile; wp_reset_query(); ?>

		</div>
	</section>
	



	<section id="abou_bra">
		<div class="container">
			<div class="row">

				<div class="col l5 m5 s12">
					<div class="mlfri_frkf">
						<div class="dmkejfi_feef">
							<div class="kmforog_tit">
								We are Brande.
							</div>
							<div class="mkso_sub">
								And we specialize in creating brands that catch your eye!
							</div>
						</div>
					</div>
				</div>

				<div class="col l7 m7 s12">
					<div class="mldaskior_al">
						<div class="koihgy_dec">
							<p>
								When it comes to branding, we really know what we are doing. We combine creative thinking and digital advancement with strategic business knowledge to develop a one-stop solution for your company, alongside an efficient strategy to distinguish your brand from others and turn your customers into loyal fans. 
							</p>
							<p>
								We are committed to making your brand jaw-dropping, remarkable, and widely recognized by setting up and meeting your goals, identifying your brand personality and message you want to deliver, and helping you stand out among all the competitors in your field. 
							</p>
												
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>



	<section id="stories">
		<div class="container">
			<div class="row">
				
				<div class="s_tit center-align shod">
					<h3>Stories</h3>
					<div class="mkdjfir_desc">
						<p>We like to keep things simple and to the point. We love working with all clients: from the world's most recognizable brands to newly born start-ups. We treat every brand with the same respect and dedication to make them memorable and bold. </p>
					</div>
				</div>


				<div class="dmlakse_serv">

					<?php
						$loop = new WP_Query( array(
						    'post_type' => 'stories',
						    'posts_per_page' => 6
						  )
						);
					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="kls_st">
							<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">

					        <?php if( get_field('story_image') ): ?>
								<a href="<?php the_field('story_link'); ?>" class="hi-icon hi-icon-contract" target="<?php the_field('open_in_new_tab'); ?>">
									<img src="<?php the_field('story_image'); ?>">
								</a>
					        <?php endif; ?>

							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>

			</div>
		</div>
	</section>



	<section id="our_serv">
		<div class="container">
			<div class="row">

				<div class="s_tit center-align shod">
					<h3>How we can help your brand</h3>
				</div>


				<div class="our_services_kd">
					<?php
						$loop = new WP_Query( array(
						    'post_type' => 'services',
						    'posts_per_page' => 9,
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

			</div>
		</div>
	</section>



	<section id="show_cases">
		<div class="container">
			<div class="row">
				
				<div class="s_tit center-align shod iufe_bg">
					<h3>Showcases Tell Stories</h3>
				</div>


				<div class="ifjr_dw clearfix">
					<?php
						$loop = new WP_Query( array(
						    'post_type' => 'showcases',
						    'posts_per_page' => 4,
						    'orderby' => 'menu_order'

						  )
						);
					?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<div class="col l6 m6 12">
							<a href="<?php the_permalink() ?>" class="lfkjroo_cas">
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

					<?php endwhile; wp_reset_query(); ?>
				</div>

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


    <!--<div class="normal_empty_space"></div>-->
    

	<section id="our_clients">
		<div class="container">
			<div class="row">
				
				<div class="s_tit center-align shod iufe_bg">
					<h3>We Grow Together</h3>
				</div>


				<div class="mflkrj_f clearfix">
					<ul>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/mashreq.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/medcare.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/aster-clinic.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/belhasa-carrental.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/kcal.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/moria.svg"></li>
					    <li><img src="<?php bloginfo('template_directory'); ?>/img/clients/aradeena.svg"></li>
					    <li>
					        <a href="https://www.unitedseo.ae/" target="_blank" alt="seo dubai">
					            <img src="<?php bloginfo('template_directory'); ?>/img/clients/useo.svg">
					        </a>
				        </li>
					</ul>
				</div>

			</div>
		</div>
	</section>


    <section id="seo_cont">
        <div class="container">
            <div class="row">
                <div class="col l6 m12 s12">
                    <div class="lkfoe_seo kjdfir_one">
                        <h1>Welcome to Brande - one of the top branding agencies in Dubai, Abu Dhabi & across the UAE</h1>
                        <p>Brande is a leading branding agency in UAE with an impeccable reputation for helping businesses develop meaningful, memorable and outstanding brands. We offer brandingservices in Dubai, Abu Dhabi and across the UAE to help businesses gain recognition inboth the local and international markets. So if you need help with branding in UAE or require assistance with global branding in Dubai, there’s one name that you can truly trust with your eyes closed – Brande!</p>
                        <br>
                        <h2>We offer branding services aimed at making you stand out!</h2>
                        <p>No matter who you are, a fresh entrepreneur or an enterprise focused on bringing a fresh wave of change in your industry, we are here to help you find unique ways of ensuring that your brand is embedded in the hearts and minds of your target audience.</p>
                        <p>Our superstar team of branding gurus is adept at:</p>
                        <ul>
                            <li><a href="/services/brand-experience/">Brand experience</a></li>
                            <li><a href="/services/brand-identity-creation/">Brand identity design</a></li>
                            <li><a href="/services/brand-strategy/">Brand strategy</a></li>
                            <li><a href="/services/rebrand-strategy/">Rebrand strategy</a></li>
                            <li><a href="/services/digital-design-development/">UI UX design</a></li>
                        </ul>
                    </div>
                    <div id="readmore_a">
                        <span>Read More</span>
                    </div>
                </div>
                
                <div class="col l6 m12 s12">
                    <div class="lkfoe_seo kjdfir_two">
                        <h2>Your search for a reliable & innovative branding company in UAE has finally come to an end!</h2>
                        <p>Brande Dubai uses creative ideas and strategy in order to help its clients create, grow and transforms their businesses. For us, what is most important is that our clients’ brands come to life and win the hearts of their target market. Since our inception, we have put in our best and worked with many brands ranging from start-ups to large-scale organizations. We are proud to claim that our services of corporate branding in Dubaihave played a vital role in them defining, redefining and re-introducing their brands with a bang!</p>
                        <p>We understand how important it is these days for your brand to be more approachable and interactive. Our team is here to assist you with creating a brand identity that customers WANT to communicate with. This is the essence of what we do at our UAE branding company.</p>
                        <p>As a creative agency in Dubai and Abu Dhabi, we adapt innovative means of building brands that uphold long-lasting connections with their customers. From conducting extensive market research to digital design and development, brand identity creation to develop rebrand strategies, we’ve got it all covered and more!</p>
                        <p>So if you truly wish to define what your brand is all about and want to develop genuine and lasting connections with your customers, then connect with us today!</p>
                    </div>
                    <div id="readmore_b">
                        <span>Read More</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <?php get_template_part('sections/cta'); ?>


    
<?php get_footer(); ?>