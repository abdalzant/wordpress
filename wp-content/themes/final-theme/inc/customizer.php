<?php







function ucas_customize_register( $wp_customize ) {
     
  $wp_customize->add_setting( 'copy_right', array(
      'type' => 'theme_mod',
      'default' => 'Copy Right 2023',
    ) );

    $wp_customize->add_control( 'copy_right', array(
      'type' => 'text',
      'priority' => 10, // Within the section.
      'label' => 'Copy Right',
      'description' => 'Add Copy Right',
      'default' => 'Copy Right',
      'section' => 'copy_right_section'

    ) );

    
    $wp_customize->add_setting( 'font', array(
      'type' => 'theme_mod',
      'default' => '',
    ) );

    $wp_customize->add_control( 'font', array(
      'type' => 'option',
      'priority' => 10, // Within the section.
      'label' => 'Copy Right',
      'description' => 'Add Copy Right',
      'default' => 'Copy Right',
      'section' => 'copy_right_section'

    ) );

    

    $wp_customize->add_setting( 'color_font', array(
      'type' => 'theme_mod',
      'default' => '#727272',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_font', array(
      'label' => 'color Font',
      'description' => 'Add color Font',
      'section' => 'copy_right_section'

    ) ) );


    $wp_customize->add_section( 'copy_right_section', array(
      'title' => 'Copy Right',
      'priority' => '30',
      'description' => 'Copy Right Section',
    ) );
    

}
add_action( 'customize_register', 'ucas_customize_register' );








?>