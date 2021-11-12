<?php get_header(); ?>

	<div id="main_site_content">


		<section class="slider_servbig">
			<div class="container">
				<div class="row">
		

			        <div class="col l5 m12 s12 push-l7 push-m0 push-s0">
			        	<div class="sdkmig_glrif">
							<?php if( get_field('image_heweb') ): ?>
							<img src="<?php the_field('image_heweb'); ?>">
							<?php endif; ?>
			        	</div>
			        </div>

			        <div class="col l7 m12 s12 pull-l5 pull-m0 pull-s0">
			        	<div class="dfkmifg_ldfirweb">
			        		
			        		<div class="dfkjif_t"></div>

			        		<div class="dlfo_fkkmg">
								<?php if( get_field('main_title_web') ): ?>
								<div class="sdki_gltti"><?php the_field('main_title_web'); ?></div>
								<?php endif; ?>

								<?php if( get_field('sub_title_web') ): ?>
			        			<div class="sdif_dklrkffg">
			        				<?php the_field('sub_title_web'); ?>
			        			</div>
								<?php endif; ?>

								<?php if( get_field('description_web') ): ?>
			        			<div class="dflo_wlodd">
			        				<p>
			        					<?php the_field('description_web'); ?>
			        				</p>
			        			</div>
								<?php endif; ?>

			        		</div>

			        	</div><!-- dfkmifg_ldfirweb -->
			        </div>

				</div>
			</div>
		</section><!-- page_header_b -->




		<section class="sd_kfbrande">
			<div class="container">
				<div class="row">
					
					<div class="col l6 m12 s12">
						<div class="sokfl_fkr">

							<div class="kjlf_one">
								<?php if( get_field('image_1web') ): ?>
								<img src="<?php the_field('image_1web'); ?>">
								<?php endif; ?>
							</div>

						</div><!-- sokfl_fkr -->
					</div>

					<div class="col l6 m12 s12">
						<div class="dfokle_contdf">
							<?php if( get_field('title_asweb') ): ?>
								<h1><?php the_field('title_asweb'); ?></h1>
							<?php endif; ?>

							<div class="sldko_dllrosf">
								<?php if( get_field('content_asweb') ): ?>
								<p>
									<?php the_field('content_asweb'); ?>
								</p>
								<?php endif; ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>




		<section class="ben_fweb_design">
			<div class="container">
				<div class="row">
					<div class="sdkji_benweb">

					<?php if( have_rows('item_infweb') ): ?>
					    <ul>
					    <?php while( have_rows('item_infweb') ): the_row(); 
					        $image_d = get_sub_field('icon_infweb');
					        $title_d = get_sub_field('title_infweb');
					        $content_d = get_sub_field('content_infweb');
					        ?>
							<li>
								<div class="benf_icon">
									<img src="<?php echo $image_d; ?>">
								</div>
								<div class="sdkif_contbend">
									<h3><?php echo $title_d; ?></h3>
									<p>
										<?php echo $content_d; ?>
									</p>
								</div>
							</li>
					    <?php endwhile; ?>
					    </ul>
					<?php endif; ?>

					</div>
				</div>
			</div>
		</section>




		<section class="case_studies_webdev">
			<div class="container">
				<div class="row">

					<div class="s_tit center-align shod iufe_bg">
						<h3>Case Studies</h3>
					</div>


						<?php if( have_rows('case_stweb') ): while( have_rows('case_stweb') ): the_row(); 
					        $tituhi = get_sub_field('sector');
					        $subtitljh = get_sub_field('title_secweb');
					        $contenthgui = get_sub_field('description_seweb');
					        $imgdrf = get_sub_field('image_iju');
				        ?>
		
						<div class="asdji_fkdjrcases clearfix">
							<div class="col l6 m12 s12 push-l6 push-m0 push-s0 case_image">
								<div class="sdkio_fmimg">
									<img src="<?php echo $imgdrf; ?>">
								</div>
							</div>

							<div class="col l6 m12 s12 pull-l6 pull-m0 pull-s0 sdokof_dllkscont">
								<div class="sdk_ldfgsd">
									<div class="skd_smalltit">
										<?php echo $tituhi; ?>
									</div>
									<div class="sdkmif_hea">
										<?php echo $subtitljh; ?>
									</div>
									<div class="sadkmi_descs">
										<?php echo $contenthgui; ?>
									</div>
								</div><!-- sdk_ldfgsd -->
							</div><!-- sdokof_dllkscont -->

						</div><!-- asdji_fkdjrcases -->

					    <?php endwhile; endif; ?>

				</div>
			</div>
		</section>




        <section class="benefits_kfd">
            <div class="container">
                <div class="row">

                    <?php if( get_field('section_title') ): ?>
                        <div class="s_tit center-align shod">
                            <h3><?php the_field('section_title'); ?></h3>
                        </div>
                    <?php endif; ?>
                    

                    <div class="asldkf_fesdc">
                        <ul class="dkjlr_feben">
                            
                            <?php if( have_rows('key_benefits') ): while( have_rows('key_benefits') ) : the_row(); ?>
                            <li>
                                <div class="vflkor">
                                    <span class="f_num"></span> 
                                </div>
                                
                                <div class="fdslf_fel">
                                    <p>
                                        <?php the_sub_field('content_pen'); ?>
                                    </p>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                            
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>




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



		<?php get_template_part('sections/cta'); ?>


	<?php get_footer(); ?>