<?php

new \Kirki\Panel(
	'aidzone_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Aidzone Options', 'aidzone' ),
		'description' => esc_html__( 'My Options  Description.', 'aidzone' ),
	]
);


function header_info_section(){

    new \Kirki\Section(
        'header_section_id',
        [
            'title'       => esc_html__( 'Header Settings', 'aidzone' ),
            'description' => esc_html__( 'My Header Section Description.', 'aidzone' ),
            'panel'       => 'aidzone_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_topbar',
            'label'       => esc_html__( 'Header Topbar Switch', 'kirki' ),
            'description' => esc_html__( 'Header topbar on/off switch', 'kirki' ),
            'section'     => 'header_section_id',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'address_text',
            'label'    => esc_html__( 'Address', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'The queens walk, TSV 3456', 'aidzone' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'address_url',
            'label'    => esc_html__( 'Address URL', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'email_id',
            'label'    => esc_html__( 'Email', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'needhelp@mail.com', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'phone',
            'label'    => esc_html__( 'Phone', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( '+ 4 20 7700 1007', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'button_text',
            'label'    => esc_html__( 'Button', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'The queens walk, TSV 3456', 'aidzone' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'button_url',
            'label'    => esc_html__( 'Button URL', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'offcanvas_instagram_shortcode',
            'label'    => esc_html__( 'Offcanvas Instagram Shortcode', 'aidzone' ),
            'section'  => 'header_section_id',
            'default'  => esc_html__( 'please insert your shorcode', 'aidzone' ),
            'priority' => 10,
        ]
    );

}
header_info_section();


// social 
function header_social_section(){
    new \Kirki\Section(
        'header_social_section',
        [
            'title'       => esc_html__( 'Header Social', 'aidzone' ),
            'description' => esc_html__( 'My Header Social Description.', 'aidzone' ),
            'panel'       => 'aidzone_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'fb_url',
            'label'    => esc_html__( 'Facebook URL', 'aidzone' ),
            'section'  => 'header_social_section',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'tw_url',
            'label'    => esc_html__( 'Twitter URL', 'aidzone' ),
            'section'  => 'header_social_section',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'ins_url',
            'label'    => esc_html__( 'Instagram URL', 'aidzone' ),
            'section'  => 'header_social_section',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'pin_url',
            'label'    => esc_html__( 'Pinterest URL', 'aidzone' ),
            'section'  => 'header_social_section',
            'default'  => esc_html__( '#', 'aidzone' ),
            'priority' => 10,
        ]
    );
}
header_social_section();


// logo 
function header_logo_section(){
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'aidzone' ),
            'description' => esc_html__( 'My Header Logo Description.', 'aidzone' ),
            'panel'       => 'aidzone_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_url',
            'label'       => esc_html__( 'Logo', 'aidzone' ),
            'description' => esc_html__( 'Please upload your logo here', 'aidzone' ),
            'section'     => 'header_logo_section',
            'default'     =>  get_template_directory_uri().'/assets/img/logo/logo.png',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_search',
            'label'       => esc_html__( 'Logo Search', 'aidzone' ),
            'description' => esc_html__( 'Please upload your search logo here', 'aidzone' ),
            'section'     => 'header_logo_section',
            'default'     =>  get_template_directory_uri().'/assets/img/logo/logo-white.png',
        ]
    );
    
 
}
header_logo_section();

// logo 
function footer_section(){
    new \Kirki\Section(
        'footer_section',
        [
            'title'       => esc_html__( 'Footer', 'aidzone' ),
            'description' => esc_html__( 'My Footer Description.', 'aidzone' ),
            'panel'       => 'aidzone_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Copyright Text', 'aidzone' ),
            'section'  => 'footer_section',
            'default'  => esc_html__( 'Full Copyright & Design By @Theme pure', 'aidzone' ),
            'priority' => 10,
        ]
    );


}
footer_section();