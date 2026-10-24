<?php

/*******************************************************
 * 
 *  Register block pattern categories
 * 
 * *****************************************************/
function elastra_register_block_pattern_categories() {

	register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'elastra/layouts',
		array( 'label' => esc_html__( 'Layouts', 'elastra' ) )
	);
  register_block_pattern_category( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		'elastra/footers',
		array( 'label' => esc_html__( 'Footers', 'elastra' ) )
	);

}
add_action( 'init', 'elastra_register_block_pattern_categories');
