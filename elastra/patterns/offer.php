<?php
/**
 * Title: offer
 * Slug: elastra/offer
 * Categories: layouts
 * Keywords: offer, full width
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-text-color has-primary-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('What We Offer', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-style-default","style":{"typography":{"fontWeight":"700","textAlign":"center","lineHeight":"1.2"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default has-x-large-font-size" style="font-weight:700;line-height:1.2"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Solutions Built Around Your %1$sBusiness%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.8","textAlign":"center"},"spacing":{"margin":{"top":"20px"}}}} -->
<p class="has-text-align-center" style="margin-top:20px;font-size:18px;line-height:1.8"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, ligula vitae facilisis porta, libero lorem tristique nunc, sed bibendum justo lorem vitae augue.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"18px"},"spacing":{"padding":{"top":"40px","right":"35px","bottom":"40px","left":"35px"}},"shadow":"var:preset|shadow|natural"},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:18px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('📊 Business Strategy', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sLearn More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"18px"},"spacing":{"padding":{"top":"40px","right":"35px","bottom":"40px","left":"35px"}},"shadow":"var:preset|shadow|natural"},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:18px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('🚀 Growth Consulting', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Curabitur porta erat .', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sLearn More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"18px"},"spacing":{"padding":{"top":"40px","right":"35px","bottom":"40px","left":"35px"}},"shadow":"var:preset|shadow|natural"},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:18px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('🤝 Business Advisory', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus, lorem quis gravida pulvinar.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sLearn More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"18px"},"spacing":{"padding":{"top":"40px","right":"35px","bottom":"40px","left":"35px"}},"shadow":"var:preset|shadow|natural"},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:18px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e('💡 Consulting', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod augue sed orci faucibus.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sLearn More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->