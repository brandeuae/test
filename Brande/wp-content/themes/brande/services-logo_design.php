<?php get_header(); ?>

	<div id="main_site_content">


		<section class="page_header_b">
			<div class="container">
				<div class="row">
		
					<div class="sokio_fkkg">
						
						<div class="sdlko_slcont">
							<div class="skif_flr">
							<?php if( get_field('title_ld') ): ?>
								<h3><?php the_field('title_ld'); ?></h3>
							<?php endif; ?>

							<?php if( get_field('main_title_ld') ): ?>
								<h1><?php the_field('main_title_ld'); ?></h1>
							<?php endif; ?>

							<?php if( get_field('description_ld') ): ?>
								<div class="sdji_gktk">
									<?php the_field('description_ld'); ?>
								</div>
							<?php endif; ?>

							</div>
						</div>

					</div>
					
				</div>
			</div>

			<?php if( get_field('header_background_image_ld') ): ?>
			<div class="skjif_fk">
				<div class="sec_sh"></div>
				<img src="<?php the_field('header_background_image_ld'); ?>">
			</div>
			<?php endif; ?>

		</section>



		<?php if( have_rows('work_block_ld') ): ?>
		<section class="logo_some_works">

		
			<div class="container">
				<div class="row">
					
					<div class="s_tit center-align shod iufe_bg">
						<h3>Some of Our Work</h3>
					</div>


					<div class="ifjr_dw clearfix">

						<?php
							while( have_rows('work_block_ld') ): the_row(); 
				        	$image_ldw = get_sub_field('work_image_ld');
				        ?>

						<div class="col l6 m6 12">
							<a href="javascript:void(0);" class="lfkjroo_cas">
								<h3><?php the_sub_field('work_title_ld'); ?></h3>

		                        <img src="<?php echo $image_ldw; ?>" class="mfklr_cs">

								<div class="mdoe_tit">
									<?php the_sub_field('work_description_ld'); ?>
								</div>
							</a>
						</div>

						<?php endwhile; ?>

					</div>

				</div>
			</div>

		</section>
		<?php endif; ?>



		<?php if( have_rows('steps_lp') ): ?>
		<section class="logo_process">
			<div class="container">
				<div class="row">

				<div class="s_tit center-align shod iufe_bg">
				    <h3>Our Process</h3>
				</div>
					
					<div class="sdkkf_fkro">
						<div class="stps_dkfi">
							<div class="skfl">
								<img src="<?php bloginfo('template_directory'); ?>/img/logo_design/our-process.svg">
							</div>
						</div>
					</div><!-- sdkkf_fkro -->
					
		    		<?php
		    			while( have_rows('steps_lp') ): the_row(); 
        				$st_tit = get_sub_field('our_process_title_ld');
        				$st_con = get_sub_field('our_process_content_ld');
        			?>

					<div class="col l4 m6 s12">
						<div class="skdol_cont">
							<h3><?php echo $st_tit; ?></h3>
							<p>
								<?php echo $st_con; ?>
							</p>
						</div>
					</div>

					<?php endwhile; ?>

				</div>
			</div>

		</section>
		<?php endif; ?>



		<section id="works_logos_dklof">
			<div class="container">
				<div class="row">
					
					<div class="mflkrj_f clearfix">
					
						<?php 
						$images = get_field('logo_dkf');
						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>

					</div>


				</div>
			</div>
		</section>

        


		<?php if( have_rows('block_items_ld') ): ?>
		<section class="logo_why_choose_us">
			<div class="sdlk_whyus">
				<div class="container">
					<div class="row">
						
						<div class="s_tit center-align shod iufe_bg">
							<h3>Why Choose Us?</h3>
						</div>

						<div class="sdk_cdf clearfix">

						    <?php while( have_rows('block_items_ld') ): the_row(); 
        						$bt = get_sub_field('cho_block_title_ld');
        						$bc = get_sub_field('cho_content_ld');
    						?>
							<div class="col l6 m12 s12">
								
								<div class="ksdj_fkeif">
									<div class="sdki_num">
										<span>0<?php echo get_row_index(); ?></span>
									</div>

									<div class="somfl_fkeio">
										<h3><?php echo $bt; ?></h3>
										<p><?php echo $bc; ?></p>
									</div>

								</div>

							</div>
							<?php endwhile; ?>

						</div>


					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>


		<section id="our_clients">
			<div class="container">
				<div class="row">
					
					<div class="s_tit center-align shod iufe_bg">
						<h3>Our Clients</h3>
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
                        <h1>Welcome to Brande – Revitalize your brand with a custom-made logo design</h1>
                        <p>The right brand is in the position to connect with its target audience, and presents its story in a manner that is engaging. Brande is a logo design agency in Dubai that helps businesses all over the world take the first step towards building a brand and gaining recognition by designing a logo that translates their ideology effectively.</p>
                        <p>The logo that you choose has the potential to make or break your brand – and we wish to see you succeed. As a highly experienced branding agency in Dubai, we understand that you want a logo that attracts perspective clients and customers and encourages them to engage. For us, you just have one single chance to inspire trust within your audience, and we have what it takes to get it right.</p>
                        <br>
                        <h2>We create company logo designs that are memorable</h2>
                        <p>At Brande, we have a passion to work with clients from all over the world, irrespective ofwhether they are newly born start-ups, some of the world’s most famous brands and even those that are somewhere in between. Our designers treat every single client with the same respect and dedication, and deliver logo designs that are as classy, memorable and bold as our clients want!</p>
                    </div>
                    <div id="readmore_a">
                        <span>Read More</span>
                    </div>
                </div>
                
                <div class="col l6 m12 s12">
                    <div class="lkfoe_seo kjdfir_two">
                        <h2>What makes Brande the best logo design company in Dubai?</h2>
                        <p>We’ve been asked this multiple times, and it’s about time that we respond to this query. As a logo design agency in Dubai, Brande is all about creating logos that are meaningful, aesthetically appealing, creative and inspire trust. Our number one priority is to help businesses gain recognition in both the local and international markets by delivering a logo that is clear and tells their story.</p>
                        <p>What truly sets us apart is our passion to uncover your brand’s insights, its attributes and values and bring it to life with a logo that makes it stand out. We believe that brand logos have the power to create a strong first impression, and are focused on creating a well-developed, clear face for your brand, a single stroke at a time.</p>
                        <br>
                        <h2>Creating visually appealing & clear logo designs is our forte</h2>
                        <p>Our team is readily available to help you ensure that your brand is expressed beautifully. Our attention to detail when creating company logo designs is unmatched in the industry and our track record will give you an idea that we believe in actions instead of words – we get the job done just as we promise!</p>
                        <p>We work with a passion to deliver end results that go well -beyond your imagination. From choosing the colors to the style and font, we go the extra mile to do everything that can make your brand stand out amidst your competitors. Our team is comprised of some of the most talented logo designing gurus with experience that spans across years to their credit. With a fine eye for detail, we are here to help you tell your brand’s journey with a captivating graphic design logo that creates a tactile connection between your brand and its target audience!</p>
                        <p>So whether you are interested in simply getting a stunning logo created for your brand, or require bespoke solutions from a rebrand agency, Brande’s team is here to help you all through your journey!</p>
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