<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
?>  
<section id="content">
	<div class="container">
		<div class="columns">
			<?php if ( get_theme_mod( 'downbeat_layout' ) == "right") { ?>
			<div class="column is-one-third" id="side">
				<?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
			</div>
			<div class="column" id="main">
				<?php get_template_part( 'loop', 'index' ); //the Loop ?>
			</div>	    
			<!--clearing break-->
			<br class="clear" />
			<?php } elseif ( get_theme_mod( 'downbeat_layout' ) == "full") { ?>
			<div class="column" id="main">
				<?php get_template_part( 'loop', 'index' ); //the Loop ?>
			</div>	    
			<?php } else { ?>
			<div class="column is-two-thirds" id="main">
				<?php get_template_part( 'loop', 'index' ); //the Loop ?>
			</div>
			<div class="column" id="side">
				<?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
			</div>
			<!--clearing break-->
			<br class="clear" />
			<?php } ?>

		</div>
	</div>
</section>