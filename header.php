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

   <!-- search area start -->
   <div class="search-popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search-wrapper">
                  <div class="search-top d-flex justify-content-between align-items-center">
                     <div class="search-logo">
                        <a href="index.html">
                           <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" alt="">
                        </a>
                     </div>
                     <div class="search-close">
                        <button type="button" class="search-close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search-form">
                     <form action="#">
                        <div class="search-input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search area start -->

   <!-- start offcanvas area  -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-wrapper">
         <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="tp-offcanvas-logo">
               <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt=""></a>
            </div>
            <div class="tp-offcanvas-close">
               <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="tp-offcanvas-menu d-xl-none mb-50">
            <nav></nav>
         </div>
         <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
            <h2 class="tp-offcanvas-title">Hello There!</h2>
            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
         </div>
         <div class="tp-offcanvas-gallery mb-50">
            <a class="popup-image" href="assets/img/footer/f-4-1.jpg">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/f-4-1.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-2.jpg">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/f-4-2.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-3.jpg">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/f-4-3.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-4.jpg">
               <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/f-4-4.jpg" alt="">
            </a>
         </div>
         <div class="tp-offcanvas-info mb-50">
            <h3 class="tp-offcanvas-sm-title">Information</h3>
            <span><a href="#">+ 4 20 7700 1007</a></span>
            <span><a href="#">hello@exdos.com</a></span>
            <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
         </div>
         <div class="tp-offcanvas-social mb-50">
            <h3 class="tp-offcanvas-sm-title">Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- start offcanvas end  -->

   <!-- Back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <i class="fa-regular fa-angle-up"></i>
      </button>
   </div>
   <!-- Back to top end -->

   
<?php echo get_template_part('template/header/header-1'); ?>