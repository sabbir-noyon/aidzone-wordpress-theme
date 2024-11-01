<!doctype html>
<html class="no-js" <?php echo language_attributes(); ?>>

<head>

   <meta charset="<?php bloginfo( 'charset' ); ?>">

   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>

<body>


   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
               <div class="tp-preloader-logo">
                  <div class="tp-preloader-circle">
                     <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                        </circle>
                        <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                     </svg>
                  </div>
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/favicon.png" alt="">
               </div>
               <p class="tp-preloader-subtitle">Loading...</p>
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- Back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <i class="fa-regular fa-angle-up"></i>
      </button>
   </div>
   <!-- Back to top end -->

   
<?php echo get_template_part('template/header/header-1'); ?>
<?php echo get_template_part('template/header/header-search'); ?>
<?php echo get_template_part('template/header/offcanavs'); ?>