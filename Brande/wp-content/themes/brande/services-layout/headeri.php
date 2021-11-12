<section class="slider_serv">

  <div class="container">
    <div class="row">

        <div class="col s12">
          <div class="sldkfr_er">

            <?php if( get_field('header_title') ): ?>
              <div class="main_sertit">
                <h2><?php the_field('header_title'); ?></h2>
              </div>
            <?php endif; ?>

            <?php if( get_field('header_title_long') ): ?>
            <div class="dklfre_sub">
              <?php the_field('header_title_long'); ?>
            </div>
            <?php endif; ?>

            <?php if( get_field('header_short_desc') ): ?>
            <div class="dklfre_sub">
              <?php the_field('header_short_desc'); ?>
            </div>
            <?php endif; ?>

          </div>
        </div>

    </div>
  </div>

  <?php if( get_field('header_image_background') ): ?>
    <div class="lkfr_bg im_bg" style="background-image: url(<?php the_field('header_image_background'); ?>);"></div>
  <?php endif; ?>

</section><!-- slider_serv -->