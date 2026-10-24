<?php
/**
 * Title: pricing
 * Slug: elastra/pricing
 * Categories: layouts
 * Keywords: pricing, full width
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#111111"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#111111;margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"background"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-background-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Consulting Packages', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center","lineHeight":"1.2"}},"textColor":"white","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-x-large-font-size" style="font-weight:700;line-height:1.2"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Choose The %1$sRight Level%2$s Of Support', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-white-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Select a plan that fits your goals and lifestyle.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"45px","bottom":"45px","left":"35px","right":"35px"},"blockGap":"var:preset|spacing|30","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:45px;padding-right:35px;padding-bottom:45px;padding-left:35px"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('Essential Plan', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"48px","textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php /* Translators: 1. is the start of a 'span' HTML element, 2. is the end of a 'span' HTML element */ 
echo sprintf( esc_html__( ' $29%1$s/mo%2$s', 'elastra' ), '<span style="font-size:18px">', '</span>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Monthly strategy consultation', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Business performance review', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Action plan development', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Email support', 'elastra');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get Started', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"45px","bottom":"45px","left":"35px","right":"35px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"primary"} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:20px;padding-top:45px;padding-right:35px;padding-bottom:45px;padding-left:35px"><!-- wp:paragraph {"className":"has-white-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","textAlign":"center"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Most Popular', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color"><?php esc_html_e('Growth Plan', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"48px","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:48px"><?php /* Translators: 1. is the start of a 'span' HTML element, 2. is the end of a 'span' HTML element */ 
echo sprintf( esc_html__( '$59%1$s/mo%2$s', 'elastra' ), '<span style="font-size:18px">', '</span>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"textColor":"white"} -->
<ul class="wp-block-list has-white-color has-text-color"><!-- wp:list-item -->
<li><?php esc_html_e('Bi-weekly strategy sessions', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Growth and market analysis', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Priority business support', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Quarterly performance review', 'elastra');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"backgroundColor":"background","textColor":"foreground","style":{"dimensions":{"width":"100%"},"typography":{"textAlign":"center"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background has-text-align-center wp-element-button"><?php esc_html_e('Choose Growth', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"45px","bottom":"45px","left":"35px","right":"35px"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:45px;padding-right:35px;padding-bottom:45px;padding-left:35px"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('Executive Plan', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"48px","textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:48px"><?php /* Translators: 1. is the start of a 'span' HTML element, 2. is the end of a 'span' HTML element */ 
echo sprintf( esc_html__( ' $99%1$s/mo%2$s', 'elastra' ), '<span style="font-size:18px">', '</span>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Dedicated business advisor', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Custom growth strategy', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Market and competitor analysis', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Priority 24/7 support', 'elastra');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Choose Executive', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->