<?php
// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if ( isset( $title ) && ! empty( $title ) ) :
	?>
	<?php echo $before_title;
	echo esc_html( $title ); ?>

    <a class="widgettitle__icon" href="<?php echo home_url( '/feed/rss/' ); ?>">
        <span class="visuallyhidden">S'abonner</span>
        <span class="icon-feed"></span>
    </a>
	<?php echo $after_title; ?>
<?php endif; ?>
    <div class="widget__list widget_news__list">
		<?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
            <a class="widget_news__list-link" href="<?php the_permalink();?>"><?php the_title();?></a>
		<?php endwhile; ?>
    </div>
<?php if( isset($link) && !empty($link) ) : ?>
    <a href="<?php echo esc_url($link); ?>" class="button widget_news__button"><?php echo esc_html($label);?></a>
<?php endif;