<?php get_header(); ?>
<!-- container -->
<div class="container is-desktop">
	<!-- site-content -->
	<div class="site-content">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				if ( get_post_format() == false ) {
					get_template_part( 'content', 'single' );
				} else {
					get_template_part( 'content', get_post_format() );
				}
		endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>
	<!-- /site-content -->
</div>
<!-- container -->
<?php get_footer(); ?>
