<?php
/**
 * Title: about
 * Slug: elastra/about
 * Categories: layouts
 * Keywords: about, full width
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:120px;padding-right:30px;padding-bottom:120px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"572px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/laptop-computer-writing-working-table-person-764428-pxhere.com_-1.jpg" alt="" class="" style="border-radius:20px;width:572px;height:auto"/></figure>
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