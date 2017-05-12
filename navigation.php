<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
if (has_nav_menu('navigation')) { ?>
<div class="hero-foot">
	<nav class="tabs">
		<div class="container">
			<?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		</div>
	</nav>
</div>
<?php } ?>