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
    
 
}
header_logo_section();