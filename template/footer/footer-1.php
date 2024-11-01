<footer>

<!-- footer area start -->
<?php if ( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' ) || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' ) ) { ?>
<section class="tp-footer-area tp-footer-4 pt-120 pb-100 tp-footer-style-2 tp-plr-rs black-bg">
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <?php dynamic_sidebar('footer-widget-1'); ?>
         </div>
         <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
            <?php dynamic_sidebar('footer-widget-2'); ?>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <?php dynamic_sidebar('footer-widget-3'); ?>
         </div>
         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <?php dynamic_sidebar('footer-widget-4'); ?>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<!-- footer area end -->

<!-- copyright area start -->
<div class="tp-copyright-area pt-20 tp-copyright-style">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-12">
            <div class="tp-copyright-text text-center">
               <?php aidzone_footer_copyright(); ?>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- copyright area end-->
</footer>