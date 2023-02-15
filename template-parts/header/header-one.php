<?php
/**
* Template Name: Header Two
*
*/
?>
<header id="masthead" class="site-header header-one" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-3 align-self-center">
				<div class="site-branding header-logo">
					<?php
					if ( has_custom_logo() ) :
						the_custom_logo();
					endif;
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						$rs_pet_blog_description = get_bloginfo( 'description', 'display' );
						if ( $rs_pet_blog_description || is_customize_preview() ) :
							?>
						<p class="site-description"><?php echo esc_html( $rs_pet_blog_description ); /* WPCS: xss ok. */ ?></p>
							<?php
					endif;
					?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-md-9 m-auto align-self-center text-right">
				<div class="cssmenu text-right" id="cssmenu">
					<?php
					wp_nav_menu(
						array(
							'theme_location'    => 'main-menu',
							'container'         => 'ul',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
