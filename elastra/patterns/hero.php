<?php
/**
 * Title: hero
 * Slug: elastra/hero
 * Categories: layouts
 * Keywords: hero, full width
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/LAPTOP1-1024x682.jpg","dimRatio":60,"overlayColor":"foreground","isUserOverlayColor":true,"minHeight":850,"minHeightUnit":"px","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:40px;padding-bottom:120px;padding-left:40px;min-height:850px"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/LAPTOP1-1024x682.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1140px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px"}},"textColor":"white"} -->
<p class="has-white-color has-text-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Business Consulting', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"72px","lineHeight":"1.05","fontWeight":"700"}},"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color" style="font-size:72px;font-weight:700;line-height:1.05"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is a 'br' HTML element, 4. is the start of a 'strong' HTML element, 5. is the end of a 'strong' HTML element, 6. is a 'br' HTML element, 7. is the start of a 'strong' HTML element, 8. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Think %1$sBigger%2$s.%3$sMove %4$sSmarter%5$s.%6$sGrow %7$sStronger%8$s.', 'elastra' ), '<strong>', '</strong>', '<br>', '<strong>', '</strong>', '<br>', '<strong>', '</strong>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","lineHeight":"1.8"}},"textColor":"white"} -->
<p class="has-white-color has-text-color" style="font-size:20px;line-height:1.8"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae nisl quis erat consequat faucibus. Donec luctus neque sed ligula placerat, eget cursus libero faucibus.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"36px","right":"36px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:18px;padding-right:36px;padding-bottom:18px;padding-left:36px"><?php esc_html_e('Start a Conversation', 'elastra');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"36px","right":"36px"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:50px;padding-top:18px;padding-right:36px;padding-bottom:18px;padding-left:36px"><?php esc_html_e('Explore Services', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->