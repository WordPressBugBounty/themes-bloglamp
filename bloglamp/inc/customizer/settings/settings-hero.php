<?php

add_filter( 'bloghash_customizer_options', 'bloglamp_customizer_hero_options', 11 );
function bloglamp_customizer_hero_options( array $options ) {
	// Header Layout.
	$options['setting']['bloghash_hero_type']['control']['choices'] = array(
		'horizontal-slider' => esc_html__( 'Slider Horizontal', 'bloghash' ),
		'six-slider'       	=> esc_html__( 'Slider Bloglamp', 'bloghash' ),
	);

	return $options;
}
