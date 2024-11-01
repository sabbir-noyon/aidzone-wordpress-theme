<?php

// header_logo
function header_logo(){ 
    $logo_url = get_theme_mod('logo_url', get_template_directory_uri().'/assets/img/logo/logo.png');   
    ?>

    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo esc_url($logo_url); ?>" alt=""></a>

    <?php
}

// header_search_logo
function header_search_logo(){ 
    $logo_search = get_theme_mod('logo_search', get_template_directory_uri().'/assets/img/logo/logo-white.png');   
    ?>

    <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo esc_url($logo_search); ?>" alt=""></a>

    <?php
}


function aidzone_footer_copyright(){ 
    $footer_copyright_text = get_theme_mod('footer_copyright', __('Full Copyright & Design By @Theme pure','aidzone'));    
    ?>
        <p><?php echo esc_html($footer_copyright_text); ?></p>

<?php
}


// aidzone_header_social
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

// aidzone blog pagination 
function aidzone_pagination(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<i class="fa-regular fa-arrow-left icon"></i>','aidzone'),
        'next_text'    => __('<i class="fa-regular fa-arrow-right icon"></i>','aidzone'),
    ) );
        if( $pages ) {
        echo '<nav><ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}


function aidzone_tag(){
    $aidzone_tags = get_the_tags(); 

    
    
    foreach($aidzone_tags as $aidzone_tag) { 
        ?>
        <a href="<?php echo get_tag_link($aidzone_tag); ?>"><?php echo esc_html($aidzone_tag->name); ?></a>
        <?php 
    }
}