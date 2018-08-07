<?php
/**
 * Template name: Modèle de page avec sidebar 
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
				<?php
				if( is_active_sidebar( 'zone-article' ) ):
					dynamic_sidebar( 'zone-article' );
				endif;
			?>
			</div><!-- #content -->
			
		</div><!-- #primary -->

<?php get_footer(); ?>