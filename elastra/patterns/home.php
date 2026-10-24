<?php
/**
 * Title: home
 * Slug: elastra/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/LAPTOP1-1024x682.jpg","dimRatio":60,"customOverlayColor":"#242424","isUserOverlayColor":true,"minHeight":850,"minHeightUnit":"px","tagName":"main","sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"}}}} -->
<main class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:40px;padding-bottom:120px;padding-left:40px;min-height:850px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/LAPTOP1-1024x682.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim" style="background-color:#242424"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1140px"}} -->
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
<!-- /wp:group --></div></main>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"70px","bottom":"70px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#111111"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#111111;margin-top:0;margin-bottom:0;padding-top:70px;padding-right:30px;padding-bottom:70px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"56px","fontWeight":"700","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:56px;font-weight:700"><?php esc_html_e('25+', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-cyan-bluish-gray-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontSize":"14px","textAlign":"center"}},"textColor":"cyan-bluish-gray"} -->
<p class="has-text-align-center has-cyan-bluish-gray-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Industry Experts', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"56px","fontWeight":"700","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:56px;font-weight:700"><?php esc_html_e('15K+', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-cyan-bluish-gray-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontSize":"14px","textAlign":"center"}},"textColor":"cyan-bluish-gray"} -->
<p class="has-text-align-center has-cyan-bluish-gray-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Clients Reached', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"56px","fontWeight":"700","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:56px;font-weight:700"><?php esc_html_e('120+', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-cyan-bluish-gray-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontSize":"14px","textAlign":"center"}},"textColor":"cyan-bluish-gray"} -->
<p class="has-text-align-center has-cyan-bluish-gray-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Projects Delivered', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"56px","fontWeight":"700","textAlign":"center"}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:56px;font-weight:700"><?php esc_html_e('98%', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-cyan-bluish-gray-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontSize":"14px","textAlign":"center"}},"textColor":"cyan-bluish-gray"} -->
<p class="has-text-align-center has-cyan-bluish-gray-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Client Satisfaction', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:30px;padding-bottom:120px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"572px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-computer-writing-working-table-person-764428-pxhere.com_-1.jpg" alt="" style="border-radius:20px;width:572px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('About Our Company', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","lineHeight":"1.15"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:700;line-height:1.15"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'A Smarter Approach To %1$sSustainable Business Growth%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.8"}}} -->
<p style="font-size:18px;line-height:1.8"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. Nullam vitae magna vel augue luctus ullamcorper. Donec feugiat, metus sed consectetur consequat, neque ipsum malesuada libero, vitae commodo sapien nibh sed neque.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"margin":{"top":"25px","bottom":"25px"}}}} -->
<ul style="margin-top:25px;margin-bottom:25px" class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Experienced consultants with proven industry knowledge', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Data-driven strategies built around your objectives', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Practical solutions focused on measurable results', 'elastra');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Long-term partnerships built on trust and transparency', 'elastra');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"34px","right":"34px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:34px;padding-bottom:16px;padding-left:34px"><?php esc_html_e('Discover More', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Our Services', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center","lineHeight":"1.2"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-weight:700;line-height:1.2"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Choose The Right Strategy For %1$sYour Business%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","textAlign":"center"}}} -->
<p class="has-text-align-center" style="font-size:18px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus libero, sed malesuada lacus interdum vitae.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="padding-right:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"0px","left":"0","right":"0"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-computer-work-people-technology-web-710514-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px","left":"30px","right":"30px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:25px;margin-right:30px;margin-left:30px"><?php esc_html_e('Business Strategy', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"30px","right":"30px"}}}} -->
<p style="margin-right:30px;margin-left:30px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Build power, improve endurance and develop confidence.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"34px","right":"34px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:34px;padding-bottom:16px;padding-left:34px"><?php esc_html_e('Discover More', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/money-business-brand-graph-icon-presentation-918235-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px","left":"30px","right":"30px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:25px;margin-right:30px;margin-left:30px"><?php esc_html_e('Growth Consulting', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"30px","right":"30px","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--30);margin-right:30px;margin-bottom:var(--wp--preset--spacing--30);margin-left:30px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Improve mobility, balance and everyday performance.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"34px","right":"34px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:34px;padding-bottom:16px;padding-left:34px"><?php esc_html_e('Discover More', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","textColor":"foreground"} -->
<div class="wp-block-group has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:image {"width":"363px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-notebook-computer-work-group-people-710517-pxhere.com_.jpg" alt="" style="width:363px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px","left":"30px","right":"30px"}}}} -->
<h3 class="wp-block-heading" style="margin-top:25px;margin-right:30px;margin-left:30px"><?php esc_html_e('Business Advisory', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"left":"30px","right":"30px"}}}} -->
<p style="margin-right:30px;margin-left:30px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Reach your goals with a personalized approach.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"50px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"34px","right":"34px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50px;padding-top:16px;padding-right:34px;padding-bottom:16px;padding-left:34px"><?php esc_html_e('Discover More', 'elastra');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull is-style-default has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Meet Our Team', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center","lineHeight":"1.2"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-weight:700;line-height:1.2"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Experts Focused On %1$sYour Success%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.8","textAlign":"center"}}} -->
<p class="has-text-align-center" style="font-size:18px;line-height:1.8"><?php esc_html_e('Our experienced team helps you create sustainable results through effective business strategies.', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:20px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man-person-suit-male-portrait-corporate-675843-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px"}},"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:25px"><?php esc_html_e('Alex Morgan', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color"><?php esc_html_e('Strategy Director', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0"><?php esc_html_e(' ★★★★★', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:20px;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-hair-singer-portrait-model-office-1226282-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px"}},"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:25px"><?php esc_html_e('Sarah Wilson', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color"><?php esc_html_e('Growth Consultant', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e(' ★★★★★', 'elastra');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:0;padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hand-man-person-male-portrait-sitting-817498-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"25px"}},"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:25px"><?php esc_html_e('David Carter', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color"><?php esc_html_e('Business Advisor', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( '%1$s★★★★★', 'elastra' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/person-girl-woman-hair-photography-wind-635897-pxhere.com_.jpg" alt="" style="border-radius:100px"/></figure>
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
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/notebook-man-working-person-people-notepad-764654-pxhere.com_.jpg" alt="" style="border-radius:100px"/></figure>
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
<figure class="wp-block-image size-full has-custom-border is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-hat-fashion-clothing-ear-blonde-1167943-pxhere.com_.jpg" alt="" style="border-radius:100px"/></figure>
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"110px","bottom":"110px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:110px;padding-right:30px;padding-bottom:110px;padding-left:30px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"750px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-vivid-red-color has-text-color","style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","textAlign":"center"}},"textColor":"primary"} -->
<p class="has-text-align-center has-vivid-red-color has-text-color has-primary-color" style="font-size:14px;letter-spacing:3px;text-transform:uppercase"><?php esc_html_e('Business Insights', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"700","textAlign":"center","lineHeight":"1.2"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-weight:700;line-height:1.2"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'Latest Business %1$sInsights & Strategies%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php esc_html_e('Discover practical ideas for strategy, leadership, growth and business performance.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-computer-writing-working-table-person-764428-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Strategy', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.4}}} -->
<h3 class="wp-block-heading" style="line-height:1.4"><?php esc_html_e('How To Build A Smarter Business Strategy', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat purus nec lectus tincidunt.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sRead More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-computer-work-people-technology-web-710514-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Productivity', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.4}}} -->
<h3 class="wp-block-heading" style="line-height:1.4"><?php esc_html_e('Simple Habits For Better Business Decisions', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae lectus vel augue posuere.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sRead More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"background"} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-notebook-computer-work-group-people-710517-pxhere.com_.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color" style="font-size:14px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Finance', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.4}}} -->
<h3 class="wp-block-heading" style="line-height:1.4"><?php esc_html_e('Understanding Data Before Making Big Decisions', 'elastra');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris placerat neque vitae.', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sRead More →%2$s', 'elastra' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

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

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->