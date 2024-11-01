<?php


function header_logo(){ 
    $logo_url = get_theme_mod('logo_url', get_template_directory_uri().'/assets/img/logo/logo.png');   
    ?>

    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo esc_url($logo_url); ?>" alt=""></a>

    <?php
}

function aidzone_header_social(){ 
    $fb_url = get_theme_mod('fb_url', '#');
    $tw_url = get_theme_mod('tw_url', '#');
    $ins_url = get_theme_mod('ins_url', '#');
    $pin_url = get_theme_mod('pin_url', '#');
    
    ?>

        <?php  if(!empty($fb_url)) : ?>
        <a href="<?php echo esc_url($fb_url); ?>"><i class="fa-brands fa-facebook"></i></a>
        <?php endif; ?> 

        <?php  if(!empty($ins_url)) : ?> 
        <a href="<?php echo esc_url($ins_url); ?>"><i class="fa-brands fa-instagram"></i></a>
        <?php endif; ?>
         
        <?php  if(!empty($tw_url)) : ?>
        <a href="<?php echo esc_url($tw_url); ?>"><i class="fa-brands fa-twitter"></i></a>
        <?php endif; ?> 

        <?php  if(!empty($pin_url)) : ?>
        <a href="<?php echo esc_url($pin_url); ?>"><i class="fa-brands fa-pinterest"></i></a>
        <?php endif; ?> 

   <?php     
}

function aidzone_menu(){

    wp_nav_menu( 
        array( 
            'theme_location'  => 'main-menu',
            'menu_class'      => 'new-menu',
            'menu_id'         => 'new-id',
            'container'      => '',
            'fallback_cb'     => 'Aidzone_Walker_Nav_Menu::fallback',
            'walker'     => new Aidzone_Walker_Nav_Menu,
        ) 
    ); 

}