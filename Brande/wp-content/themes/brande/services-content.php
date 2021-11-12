<?php get_header(); ?>

    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post(); ?>


                <?php if (get_field('header_background') == 'headerc') { ?>
                	<?php get_template_part('services-layout/headerc'); ?>
                <?php } else if (get_field('header_background') == 'headeri') { ?>
                    <?php get_template_part('services-layout/headeri'); ?>
                <?php } else if (get_field('header_background') == 'headerci') { ?>
                     <?php get_template_part('services-layout/headerci'); ?>
                <?php } ?>
        
                
                <div class="serv_page_content">

					<?php if( get_field('content_shdesc') ): ?>					
					
					<sesction class="lkjde_cont se_bgud display-block">
					    <div class="container">
					        <div class="row">
					            
					            <div class="col s12">
					                <div class="sdmflr_sef center-align">

                                        <?php if( get_field('content_shdesc_tit') ): ?>
                                                <h2><?php the_field('content_shdesc_tit'); ?></h2>
                                        <?php endif; ?>
        
					                    <?php the_field('content_shdesc'); ?>
					                </div>
					            </div>
					            
					        </div>
					    </div>
					</sesction>
					
					<?php endif; ?>
					
            
					
					<section class="dkjfke_se secha_bg sec_imright">
					    <div class="container">
					        <div class="row">

            					<?php if( have_rows('sections_content_text_image') ):  while( have_rows('sections_content_text_image') ) : the_row(); ?>

					            <div class="col l4 m6 s12">
                                    <div class="sdlkjfr_fdlkjrfd">
    
                                        <div class="serv_imgdrlkg">
                                            <img src="<?php the_sub_field('image_s'); ?>" >
                                        </div>

    					                <div class="lkdjfr_contfrs">
                                            <div class="mlkdji">
                                                <h3>0<?php // echo $i; ?></h3>
                                            </div>
                                            
                                            <div class="lkfd_gikr">
                                                <?php the_sub_field('main_title_s'); ?>
                                            </div>
                                            
                                            <p class="lpokfgtl">
                                                <?php the_sub_field('description_s'); ?>
                                            </p>
    					                </div>
                                        
                                    </div>
					            </div>

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
                    

                    </div><!-- blog_page_content -->
                    

        <?php endwhile;?>
    
    </div><!-- main_site_content -->


    <?php get_template_part('sections/cta'); ?>


<?php get_footer(); ?>