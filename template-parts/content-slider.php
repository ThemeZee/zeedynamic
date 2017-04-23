<?php
/**
 * The template for displaying articles in the slideshow loop
 *
 * @package zeeDynamic
 */

?>

<li id="slide-<?php the_ID(); ?>" class="zeeslide clearfix">

	<?php zeedynamic_slider_image( 'post-thumbnail', array( 'class' => 'slide-image' ) ); ?>

	<div class="slide-post clearfix">

		<header class="entry-header">

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		</header><!-- .entry-header -->

		<div class="entry-content clearfix">

			<?php the_excerpt(); ?>

		</div><!-- .entry-content -->

	</div>

</li>
