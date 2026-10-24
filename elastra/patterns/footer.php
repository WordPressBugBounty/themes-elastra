<?php
/**
 * Title: footer
 * Slug: elastra/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"patternName":"elastra/footer","name":"footer","categories":["footers"]},"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"15px","bottom":"30px","left":"15px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:15px;padding-bottom:30px;padding-left:15px"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"50px","bottom":"50px"}},"border":{"bottom":{"color":"#0000001c","width":"2px"}}}} -->
<div class="wp-block-columns" style="border-bottom-color:#0000001c;border-bottom-width:2px;margin-top:0px;margin-bottom:0px;padding-top:50px;padding-bottom:50px"><!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"left":"40px"}}},"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color" style="padding-left:40px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","fontSize":"23px"}},"textColor":"foreground"} -->
<h4 class="wp-block-heading has-foreground-color has-text-color" style="font-size:23px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Need Help?', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sDownloads%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sSupport%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTerms of Use%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPrivacy Policy%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","fontSize":"23px"}},"textColor":"foreground"} -->
<h4 class="wp-block-heading has-foreground-color has-text-color" style="font-size:23px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Learn More', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout Us%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sOur Works%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"}}} -->
<p style="font-size:16px;line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sNewsletter%2$s', 'elastra' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","fontSize":"23px"}},"textColor":"foreground"} -->
<h4 class="wp-block-heading has-foreground-color has-text-color" style="font-size:23px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Get in Touch', 'elastra');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px;line-height:1"><?php esc_html_e('Main Street 123, London', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sexample@example.com%2$s', 'elastra' ), '<a href="' . esc_url( 'mailto:example@example.com' ) . '" target="_blank" rel="noreferrer noopener">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-foreground-color has-text-color has-link-color" style="font-size:16px;line-height:1"><?php esc_html_e('Opening Hours: 8:00 - 19:00', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"20px","bottom":"0px"},"blockGap":{"top":"0","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"textColor":"black"} -->
<div class="wp-block-columns has-black-color has-text-color" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0px;margin-bottom:0px;padding-top:20px;padding-bottom:0px"><!-- wp:column {"textColor":"black"} -->
<div class="wp-block-column has-black-color has-text-color"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","textAlign":"center"}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color" style="font-size:16px"><?php esc_html_e('Copyright © 2026 || All Right Reserved', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->