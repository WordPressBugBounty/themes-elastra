<?php
/**
 * Title: index
 * Slug: elastra/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"tagName":"main","align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<main class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"excludeCurrent":null},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"0.9rem"}},"textColor":"foreground"} /-->

<!-- wp:post-title {"isLink":true,"className":"is-style-default","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3","fontSize":"1.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} /-->

<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read More...', 'elastra');?>","showMoreOnNewLine":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"extra-small"} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","fontSize":"medium","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"<?php esc_attr_e('Previous', 'elastra');?>"} /-->

<!-- wp:query-pagination-numbers {"fontSize":"medium"} /-->

<!-- wp:query-pagination-next {"label":"<?php esc_attr_e('Next', 'elastra');?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->