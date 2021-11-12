<?php 
	/* Template Name: Business Enquiries */
	get_header(); ?>


    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <section class="slider_inpa kg_bg">
          <div class="container">
            <div class="row">
                <div class="col s12">
                	<div class="slkdfjr_fred">
	                    <h5><?php the_title(); ?></h5>
	                    <h1>Hello. Let's talk about the details.</h1>
                	</div>
                </div>
            </div>
          </div>

			<svg class="triangle-bottom-asym bg-triangle" xmlns="http://www.w3.org/2000/svg" width="884" height="427.5" viewBox="0 0 884 427.5" xml:space="preserve" preserveAspectRatio="none"><polygon fill="#f8f8f8" points="0,0 884,0 580,427"></polygon></svg>

        </section>

        <div class="container">
            <div class="row">
                
                <div class="contact_page_content">

                	<div class="asdme_dekjfcont">
	                	<?php echo do_shortcode('[contact-form-7 id="239" title="Business Enquiries"]'); ?>            		
                	</div>


					<div class="normal_empty_space"></div>

                        
                </div><!-- work_page_content -->

            </div><!-- row -->
        </div><!-- container -->

        <?php endwhile;?>
    
    </div><!-- main_site_content -->

<?php get_footer(); ?>