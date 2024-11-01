<?php 

$address = get_theme_mod('address_text', __('The queens walk, TSV 3456','aidzone'));
$address_url = get_theme_mod('address_url', __('#','aidzone'));

$email_id = get_theme_mod('email_id', __('needhelp@mail.com','aidzone'));
$phone = get_theme_mod('phone', __('+ 4 20 7700 1007','aidzone'));
$offcanvas_instagram_shortcode = get_theme_mod('offcanvas_instagram_shortcode', __('please insert your shorcode','aidzone'));


?>



<!-- start offcanvas area  -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-wrapper">
         <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="tp-offcanvas-logo">
               <?php header_logo(); ?>
            </div>
            <div class="tp-offcanvas-close">
               <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="tp-offcanvas-menu d-xl-none mb-50">
            <nav></nav>
         </div>

         <div class="tp-offcanvas-gallery mb-50">
           <?php echo do_shortcode($offcanvas_instagram_shortcode); ?>
         </div>

         <div class="tp-offcanvas-info mb-50">
            <h3 class="tp-offcanvas-sm-title"><?php echo esc_html__('Information','aidzone'); ?></h3>
            <?php  if(!empty($phone)) : ?>   
            <span><a href="tel:<?php echo esc_html($phone); ?>"><?php echo esc_html($phone); ?></a></s>
            <?php endif; ?> 

            <?php  if(!empty($email_id)) : ?>
            <span><a href="mailto:<?php echo esc_html($email_id); ?>"><?php echo esc_html($email_id); ?></a></span>
            <?php endif; ?>

            <?php  if(!empty($address)) : ?>
            <span><a href="<?php echo esc_url($address_url); ?>"><?php echo esc_html($address); ?></a></span>
            <?php endif; ?>
         </div>
         <div class="tp-offcanvas-social mb-50">
            <h3 class="tp-offcanvas-sm-title"><?php echo esc_html__('Follow Us','aidzone'); ?> </h3>
            <?php aidzone_header_social(); ?>
         </div>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- start offcanvas end  -->