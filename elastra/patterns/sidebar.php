<?php
/**
 * Title: sidebar
 * Slug: elastra/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"border":{"style":"solid","radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"borderColor":"transparent","backgroundColor":"background","textColor":"foreground","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-transparent-border-color has-foreground-color has-background-background-color has-text-color has-background" style="border-style:solid;border-radius:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","fontSize":"small"} -->
<h2 class="has-text-align-left has-small-font-size"><?php esc_html_e('Latest posts', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":50,"featuredImageSizeHeight":49,"fontSize":"extra-small"} /-->

<!-- wp:heading {"textAlign":"left","fontSize":"small"} -->
<h2 class="has-text-align-left has-small-font-size"><?php esc_html_e('Latest comments', 'elastra');?></h2>
<!-- /wp:heading -->

<!-- wp:latest-comments {"displayExcerpt":false} /--></div>
<!-- /wp:group -->