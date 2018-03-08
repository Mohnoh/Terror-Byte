<?php

function iamtheme_customize_register( $wp_customize ) {
  $wp_customize->add_setting( 'header_textcolor', array(
    'default' => '#000000',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_section( 'iamtheme_new_section_name' , array(
    'title'      => __( 'Visible Section Name', 'iamtheme' ),
    'priority'   => 30,
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
  	'label'      => __( 'Header Color', 'iamtheme' ),
  	'section'    => 'iamtheme_new_section_name',
  	'settings'   => 'header_textcolor',
  ) ) );
}
add_action( 'customize_register', 'iamtheme_customize_register' );

?>
