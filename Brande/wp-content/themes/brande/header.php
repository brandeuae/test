<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/icons/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/icons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">

	<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0103/4864.js" async="async"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" media="screen" />
	
	<link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/NexaBold.woff2" as="font" type="font/woff2" crossorigin />
	<link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/Avenir-Medium.woff2" as="font" type="font/woff2" crossorigin />

	<style type="text/css"></style>
    <meta name="google-site-verification" content="5-fuvOKSEwFIP74kuCP6bgW2ipdSic85nnHKsmVXL7Y" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-E4S1F9Z22Z"></script>
		<script>
 		 window.dataLayer = window.dataLayer || [];
		 function gtag(){dataLayer.push(arguments);}
  		 gtag('js', new Date());

  		gtag('config', 'G-E4S1F9Z22Z');
		gtag('config', 'AW-652917679');
		</script>
	
	<?php if($_SERVER['REQUEST_URI'] == '/thank-you/'){ ?>
	<!-- Event snippet for Submit lead form - Brande conversion page -->
		<script>
 		 gtag('event', 'conversion', {'send_to': 'AW-652917679/arRgCK2Ep_YBEK_3qrcC'});
		</script>
	<?php } ?>
	
	<script>
      (function(){
    
        window.ldfdr = window.ldfdr || {};
        (function(d, s, ss, fs){
          fs = d.getElementsByTagName(s)[0];
    
          function ce(src){
            var cs  = d.createElement(s);
            cs.src = src;
            setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1);
          }
    
          ce(ss);
        })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_bElvO73rVKp8ZMqj.js');
      })();
    </script>


	<!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1501349880057859');
      fbq('track', 'PageView');
    	</script>
    	
    	<?php if($_SERVER['REQUEST_URI'] == '/thank-you/'){ ?>
    		<script>
     		fbq('track', 'Contact');
    		</script>
    	<?php } ?>
    	
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1501349880057859&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
	
	
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="site_header" class="">
		<div class="container">
			
			<div id="lkasj">
				<div class="c_dkljfe">
					<a href="<?php bloginfo('url'); ?>" class="logo_sde">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" width="140" height="36">
					</a>
					
					<div class="slo_n">
						<span><strong>be bold</strong></span>
					</div>
				</div><!-- c_dkljfe -->

				<div class="main_menu_s">
				    <?php

				      $defaults = array(
				       'theme_location'  => 'menu',
				       'container_class' => 'main-nav',
				       'container_id'    => 'menu-main-menu',
				       'menu_id'         => '',
				       'echo'            => true,
				       'fallback_cb'     => 'wp_page_menu',
				       'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				       'depth'           => 0,
				      );
				      wp_nav_menu( $defaults );

				    ?>
				</div><!-- main_menu_s -->

				<div class="lets_talk">
				    <ul>
				        <li>
				            <a href="mailto:hello@brande.ae">
				                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
				            </a>
				        </li>
				        
				        <li>
				            <a href="tel:+97145875961">
				                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
				            </a>
				        </li>
				    </ul>
				    
				    <div class="asdl_er def_but hos_er bg_btn">
    					<a data-options='{"touch" : false, "autoFocus" : false}' data-fancybox data-src="#letus_talk" href="javascript:;" class="mlaksd">
    					    <span>Let's Talk</span>
    					    <svg version="1.1" class="arr_hov" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
    					        <g>
    					            <line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line>
    					            <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline>
    					        </g>
    					    </svg>
    					</a>
				    </div>
				</div><!-- lets_talk -->

			</div><!-- lkasj -->

		</div><!-- container -->

	<?php // Run code only for Single post page
	if ( is_single() && 'post' == get_post_type() ) { ?>
	   <div class="scroll-line"></div>

	<?php } ?>
		
	</header>



	<div id="mobile_menu">
	    <div class="m_menu_header">
	        <div class="ri_sec">
	            <!-- <div class="call_tmob">
	            	<a data-options='{"touch" : false, "autoFocus" : false}' data-fancybox="" data-src="#letus_talk" href="javascript:void(0);">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><path d="M78,19H22c-6.6,0-12,5.4-12,12v31c0,6.6,5.4,12,12,12h37.2c0.4,3,1.8,5.6,3.7,7.6c2.4,2.5,5.1,4.1,9.1,4 c-1.4-2.1-2-7.2-2-10.3c0-0.4,0-0.8,0-1.3h8c6.6,0,12-5.4,12-12V31C90,24.4,84.6,19,78,19z" fill="#00A694"></path><circle cx="30" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.2;1" values="0;1;1"></animate></circle><circle cx="50" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.2;0.4;1" values="0;0;1;1"></animate></circle><circle cx="70" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.4;0.6;1" values="0;0;1;1"></animate></circle></svg>
						<span>Let's Talk</span>
	            	</a>
	            </div> -->
                
                <ul>
                    <li>
                        <a href="mailto:hello@brande.ae">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </a>
                    </li>
                
                    <li>
                        <a href="tel:+97145875961">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </a>
                    </li>
                
                    <li>
                        <a data-options='{"touch" : false, "autoFocus" : false}' data-fancybox="" data-src="#letus_talk" href="javascript:void(0);">
    						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><path d="M78,19H22c-6.6,0-12,5.4-12,12v31c0,6.6,5.4,12,12,12h37.2c0.4,3,1.8,5.6,3.7,7.6c2.4,2.5,5.1,4.1,9.1,4 c-1.4-2.1-2-7.2-2-10.3c0-0.4,0-0.8,0-1.3h8c6.6,0,12-5.4,12-12V31C90,24.4,84.6,19,78,19z" fill="#00A694"></path><circle cx="30" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.2;1" values="0;1;1"></animate></circle><circle cx="50" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.2;0.4;1" values="0;0;1;1"></animate></circle><circle cx="70" cy="47" r="5" fill="#fff"><animate attributeName="opacity" repeatCount="indefinite" dur="2s" keyTimes="0;0.4;0.6;1" values="0;0;1;1"></animate></circle></svg>
    	            	</a>
	            	</li>
                </ul>

	            <div id="menu_but"></div>
	        </div><!-- ri_sec -->

	        <div class="lef_sec">
	            <div class="head_logo">
	                <a href="<?php bloginfo('url'); ?>" class="logo_sde">
	                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" />
	                </a>
					<div class="slo_n">
					    <span><strong>be bold</strong></span>
					</div>
	            </div><!-- head_logo -->
	        </div><!-- lef_sec -->

	        <div class="sid_menu" style="display: none;">
	            <div id="si_ma_menu">
	                <?php
						$defaults = array(
						'theme_location'  => 'menu',
						'container_class' => 'main-nav',
						'container_id' => 'menu-main-menu',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'items_wrap' => ' <ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => 0,
					);
					wp_nav_menu( $defaults ); ?>
	            </div><!-- si_ma_menu -->
	        </div><!-- sid_menu -->
	    </div><!-- m_menu_header -->

	    <div class="act_si_menu" style="display: none;"></div><!-- shadow -->
	</div><!-- mobile_menu -->
