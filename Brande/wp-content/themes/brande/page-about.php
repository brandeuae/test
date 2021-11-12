<?php 
	/* Template Name: About Brande */
	get_header(); ?>


	<div id="main_site_content">
		<div class="flskdf_gr head_hu clearfix">

			<div class="container">
				<div class="row">
					<div class="col s12">
						<div class="hea_cour_tn">
							<div class="mslkfnri_deerf">
								<div class="mkldnnfr">Welcome to Brande!</div>
								<h1>About Brande</h1>				
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="mklsdf_det">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<ul class="fgtrlmo_gf">
								<li>
									<h3>For partners</h3>
									<a href="mailto:hello@brande.ae">hello@brande.ae</a>
								</li>
								<li>
									<h3>Grab a seat</h3>
									<a href="mailto:career@brande.ae">career@brande.ae</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>					

		</div>


	<div class="mflkfor_deimg">
		<div class="container">
			<div class="row">
				
				<div class="col s12">
						<div class="lksdfr">
							<h1>A brief History of Brande</h1>
						</div>
				</div>
				
				<div class="col l6 m12 s12">
						<div class="des_ksdmfir">
						<p class="kldfr_defssae">
							Being established in 2018, Brande has developed a new concept of branding to catch people's eye – from strategy to identity, from verbal to visual. 
						</p>

						<p class="kldfr_defssae">
							What matters most for Brande is the combination of creative thinking with strategic business knowledge to develop a results-driven strategy to distinguish your brand from others and turn your customers into loyal followers.
						</p>
						</div>

				</div>

				<div class="col l6 m12 s12">
					<div class="kjiu_hujjk">

							<p class="kldfr_defssae">
								Brande stands by affordability, trustworthiness, enthusiasm, and unique creativity. We are driven by our motto <strong>“Be Bold"</strong> that shows our passion and eagerness to help our clients in brand creation. 
							</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div><!-- mflkfor_deimg -->

	<div class="normal_empty_space"></div>

	<div class="commit_sde">
		<div class="container">
			<div class="row">
				<div class="col l8 m7 s12">
					<div class="sdnfir_desd">

						<div class="des_ksdmfir">
							<div class="lksdfr">
								<h1>Our Commitment</h1>
							</div>
							
							<p class="kldfr_defssae">
								As you navigate Brande’s website, we hope you learn more about our commitment to developing relevant brands that help clients be unique, reach business growth, and expand market share. 
							</p>

							<p class="kldfr_defssae">
								Simplicity, marketing, inspiring design, and extraordinary branding are our DNA. Going beyond imagination and thinking outside the box are key to success.
							</p>
							<br>
							<div class="ceo_s">
								<h3>Simon Bell</h3>
								<span>CEO</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col l4 m5 s12">
					<div class="mlkadfjr_de">
						<img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/simon.webp">
					</div>
				</div>
			</div>
		</div>
	</div><!-- commit_sde -->


	<div class="recent_clients">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="mfklsi_rt">
						<div class="lksdfr bg_color">
							<h1>Recent Clients</h1>
						</div>

						<div class="des_ksdmfir white">
							<p class="kldfr_defssae">
								We’ve been doing what we love and we know exactly what we do according to the clients’ unique challenges, preferences, and expectations.  
							</p>

							<p class="kldfr_defssae">
								Brande is proud of every client and our recent ones are Medcare, Aster Clinic, Mashreq Bank, Belhasa Group, KCAL, ProActive, ECO SERV, and Dailyforever52. We are dedicated to working with more clients to help them thrive in their industries. 
							</p>
						</div>
					</div>

					<div class="cli_logos">
						<ul>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/mashreq.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/medcare.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/aster-clinic.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/belhasa-carrental.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/kcal.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/moria.svg"></li>
						    <li><img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/aradeena.svg"></li>
						    <li>
								<a href="https://www.unitedseo.ae/" target="_blank" alt="seo dubai">
									<img rel="preload" as="image" src="<?php bloginfo('template_directory'); ?>/img/clients/useo.svg">
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="we_dothings">
		<div class="container">
			<div class="row">
				
				<div class="jhgui_kokl">
					
					<div class="lksdfr">
						<h1>How We Do Things</h1>
					</div>

					<div class="jkhuy_lserrdt">

						<?php if( have_rows('blocks_diji') ): while( have_rows('blocks_diji') ) : the_row(); ?>

					        <div id="kdfkor_fdose">
								<div class="sadjei">
									<div class="gsnce_es">

										<div class="dplfo_svg">
											<img src="<?php the_sub_field('svg_icon_diej'); ?>">
										</div>

										<div class="se_firjtit">
											<h3><?php the_sub_field('title_sadlkme'); ?></h3>
										</div>

										<div class="ksdjfr_frodesc">
											<p><?php the_sub_field('content_fsdiofje'); ?></p>
										</div>
										
									</div><!-- gsnce_es -->
								</div><!-- sadjei -->
							</div><!-- kdfkor_fdose -->

					    <?php endwhile; endif; ?>

					</div>


				</div>

			</div>
		</div>
	</div>

	
</div>



<?php get_template_part('sections/cta'); ?>


<?php get_footer(); ?>