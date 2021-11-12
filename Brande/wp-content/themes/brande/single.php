<?php get_header(); ?>

    <div id="main_site_content">

        <?php if ( ! have_posts() ) : endif; ?>
        <?php while ( have_posts() ) : the_post();
            $thumb = get_post_thumbnail_id();
            $img_url = wp_get_attachment_url( $thumb,'full' );
        ?>


        <div class="article-featured-image">
            <div class="container">
                <div class="row">
                    <div class="mlkdfir_fetop">
                        <div class="sdkfri_der">
                            <ul class="lksdjfr">
                                <li>
                                    <?php $categories = get_categories();
                                    foreach ($categories as $cat) { $category_link = get_category_link($cat->cat_ID);
                                       echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">'.$cat->name.'</a>';
                                    } ?>
                                </li>
                                <li><?php echo get_the_date(); ?></li>
                                <li><?php echo do_shortcode('[rt_reading_time]'); ?> min read</li>
                            </ul>
                            <h1><?php the_title(); ?></h1>                            
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo $img_url; ?>" />
            <div class="gradient_overlay"></div>
        </div>


        <div class="kjskdjfi_rtf">
            <div class="container">
                <div class="row">

                    <div class="col s12">
                        <div class="single_article_content">


                            <?php the_content(); ?>

                            <div class="tags"><?php the_tags('<ul><i>Tags: </i><li>','</li><li>','</li></ul>'); ?></div>

                        </div><!-- single_article_content -->
                    </div><!-- col-xs-16 -->

                </div><!-- row -->
            </div><!-- container -->
        </div>


        <?php endwhile;?>
    
    </div><!-- main_site_content -->

<?php get_footer(); ?>