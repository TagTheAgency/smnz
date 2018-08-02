<?php

/*------------------------------------*\
	Hero Banner Customiser
\*------------------------------------*/
function heroBanner($wp_customize){
	$wp_customize->add_panel('hero_banner', array(
		'title' =>__('Hero Banner', 'MinTheme hero banner section'),
	 	'description' => __( 'Change the content for the hero banner section')
	));

	/*------------------------------------*\
		Hero Banner Background Image
	\*------------------------------------*/

	$wp_customize->add_section('hero_banner_section', array(
		'title' =>__('Hero Banner', 'MinTheme Hero Banner'),
		'panel' =>'hero_banner'
	));

	$wp_customize->add_setting('hero_banner_bg_img', array(
		'transport' => 'refresh',
		'default' => ''
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_banner_image', array(
		'label' =>__('Backrgound Image','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_bg_img'
	)));

	/*------------------------------------*\
		Hero Banner Text
	\*------------------------------------*/

	$wp_customize->add_setting('hero_banner_title_text_setting', array(
		'transport' => 'refresh',
		'default' => 'Hero Banner'
	));


	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_banner_title_text', array(
		'label' =>__('Hero Banner Title','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_title_text_setting'
	)));

	$wp_customize->add_setting('hero_banner_sub_title_text_setting', array(
		'transport' => 'refresh',
		'default' => 'This is the hero sub-title'
	));


	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_banner_sub_title_text', array(
		'label' =>__('Hero Banner Sub-title','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_sub_title_text_setting'
	)));

	/*------------------------------------*\
		Hero Banner Text Colour
	\*------------------------------------*/

	$wp_customize->add_setting('hero_banner_text_color_settings', array(
		'transport' => 'refresh',
		'default' => 'Homepage','Hero Banner'
	));


	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_banner_text_color', array(
		'label' =>__('Hero Banner Text Colour','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_text_color_settings'
	)));

	/*------------------------------------*\
		Hero Banner Button
	\*------------------------------------*/

	$wp_customize->add_setting('hero_banner_btn_text_color', array(
		'transport' => 'refresh',
		'default' => ''
	));


	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_banner_btn_text_color', array(
		'label' =>__('Button Text Color','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_btn_text_color'
	)));

	$wp_customize->add_setting('hero_banner_btn_color', array(
		'transport' => 'refresh',
		'default' => ''
	));


	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_banner_btn_color', array(
		'label' =>__('Button Color','MinTheme'),
		'section' => 'hero_banner_section',
		'settings' => 'hero_banner_btn_color'
	)));

}

/*------------------------------------*\
	Hero Banner Customiser
\*------------------------------------*/
// function navBar($wp_customize){
// 	$wp_customize->add_panel('Navbar', array(
// 		'title'__=>()
// 	))
//
// }

add_action('customize_register', 'heroBanner');
add_action('customize_register', 'navBar');





?>
