<?php
/**
 * Title: contact
 * Slug: elastra/contact
 * Categories: layouts
 * Keywords: contact, full width
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"30px","right":"30px"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center"}},"textColor":"white","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-x-large-font-size" style="font-weight:700"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Ready To Take Your %1$sBusiness Further%2$s?', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-white-color has-text-color","style":{"typography":{"fontSize":"20px","textAlign":"center"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="font-size:20px"><?php esc_html_e('Let\'s turn your goals into a clear strategy and your strategy into measurable growth.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"40px","right":"40px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:18px;padding-right:40px;padding-bottom:18px;padding-left:40px"><?php esc_html_e('Start a Conversation', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->