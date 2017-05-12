<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
?>
<section class="hero is-info is-medium">
	<!-- Hero header: will stick at the top -->
	<div class="hero-head">
		<header class="nav">
			<div class="container">
				<div class="nav-left">
					<a class="nav-item">
						<h1>OneSheet</h1>
					</a>
				</div>
				<span class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<div class="nav-right nav-menu">
					<a class="nav-item">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="nav-item">
						<i class="fa fa-facebook"></i>
					</a>
					<a class="nav-item">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
			</div>
		</header>
	</div>

	<!-- Hero footer: will stick at the bottom -->
	      
	<?php /* Navigation Area (#navigation) */ get_template_part( 'navigation', 'index' ); ?>
</section>