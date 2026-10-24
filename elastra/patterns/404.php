<?php
/**
 * Title: 404
 * Slug: elastra/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"3.9rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:3.9rem"><?php esc_html_e('Page not found', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center"><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'elastra');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php esc_attr_e('Search', 'elastra');?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search', 'elastra');?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} /-->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"is-style-elastra-box-shadow","style":{"border":{"style":"solid","radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"borderColor":"transparent","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-elastra-box-shadow has-border-color has-transparent-border-color" style="border-style:solid;border-radius:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"textAlign":"left"}}} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('Latest posts', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"excludeCurrent":null},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-date {"format":"Y-m-d","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"0.9rem"}},"textColor":"foreground"} /-->

<!-- wp:post-title {"isLink":true,"className":"is-style-default","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3","fontSize":"1.1rem"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"thumbnail"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read More...', 'elastra');?>","showMoreOnNewLine":false,"excerptLength":25,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"extra-small"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->