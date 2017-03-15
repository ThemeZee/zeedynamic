<?php
/**
 * The template for displaying full image posts in Magazine Post widgets
 *
 * @package zeeDynamic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php zeedynamic_post_image(); ?>

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php zeedynamic_entry_meta(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_excerpt(); ?>
		<?php zeedynamic_more_link(); ?>

	</div><!-- .entry-content -->

</article>
