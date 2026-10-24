<?php
/**
 * Title: Testimonials
 * Slug: elastra/testimonials
 * Categories: layouts
 * Keywords: testimonials, full width
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Client Reviews', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-weight:700"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'What Our %1$sClients Say%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php esc_html_e('Business leaders share their experience working with our team.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"35px","right":"35px"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:30px"><?php esc_html_e(' ★★★★★', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('"Lorem ipsum dolor sit amet, consectetur adipiscing elit."', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/person-girl-woman-hair-photography-wind-635897-pxhere.com_.jpg" alt="" class="" style="border-radius:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Emma Johnson', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('Managing Director', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"35px","right":"35px"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:30px"><?php esc_html_e(' ★★★★★', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('"Lorem ipsum dolor sit amet, consectetur adipiscing elit."', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/notebook-man-working-person-people-notepad-764654-pxhere.com_.jpg" alt="" class="" style="border-radius:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Michael Brown', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('Company Founder', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"35px","right":"35px"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:35px;padding-bottom:40px;padding-left:35px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:30px"><?php esc_html_e(' ★★★★★', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('"Lorem ipsum dolor sit amet, consectetur adipiscing elit."', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-resized","style":{"border":{"radius":"100px"}}} -->
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/woman-hat-fashion-clothing-ear-blonde-1167943-pxhere.com_.jpg" alt="" class="" style="border-radius:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Sophia Gregor', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('Marketing Director', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->