<?php
/**
 * Title: Footer with text, links.
 * Slug: frost/footer-default
 * Categories: frost-footer
 * Block Types: core/template-part/footer
 * Viewport Width: 1280
 */

?>

<!-- wp:group {"align":"full","style":{"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;font-size:18px"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}},"spacing":{"padding":{"top":"100px","bottom":"100px"},"blockGap":"100px"}}} -->
<div class="wp-block-columns alignwide has-link-color" style="padding-top:100px;padding-bottom:100px"><!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:heading {"level":4} -->
<h4 id="our-company">Our Company</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lectus. Vestibulum mi justo, luctus eu pellentesque vitae gravida non.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Company</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li><a href="#">Our Story</a></li><li><span style="background-color: var(--wp--preset--color--background); color: var(--wp--preset--color--foreground); font-family: var(--wp--preset--font-family--body); font-weight: var(--wp--custom--font-weight--regular);"><a href="#">Our Mission</a></span></li><li><a href="#">Contact Us</a></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Support</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li><a href="#">FAQ</a></li><li><a href="#">Shipping Policy</a></li><li><a href="#">Returns &amp; Exchanges</a></li><li><a href="#">Gift Cards</a></li></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"28%"} -->
<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Newsletter</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Subscribe to the latest news, exclusive offers and 10% off your first purchase.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"left":"12px"}}},"borderColor":"foreground","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-foreground-border-color" style="border-width:1px;padding-left:12px"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Email Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":88,"width":50,"height":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/Visa.png' ) ); ?>" alt="" class="wp-image-88" width="50" height="28"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":86,"width":50,"height":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php
echo esc_url( get_theme_file_uri( 'assets/images/MasterCard.png' ) ); ?>" alt="" class="wp-image-86" width="50" height="28"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":84,"width":50,"height":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php
echo esc_url( get_theme_file_uri( 'assets/images/American_Express.png' ) ); ?>" alt="" class="wp-image-84" width="50" height="28"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":87,"width":50,"height":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php
echo esc_url( get_theme_file_uri( 'assets/images/PayPal.png' ) ); ?>" alt="" class="wp-image-87" width="50" height="28"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":85,"width":50,"height":28,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php
echo esc_url( get_theme_file_uri( 'assets/images/Discover.png' ) ); ?>" alt="" class="wp-image-85" width="50" height="28"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"mega-trendy-footer"} -->
<div class="wp-block-group alignfull mega-trendy-footer"><!-- wp:site-title {"className":"mega-trendy-footer__title"} /--></div>
<!-- /wp:group -->
