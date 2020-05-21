<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 medium-9 cell'); ?> role="article">					
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->					
	<section class="grid-x" itemprop="articleBody">
		<a class="float-left cell  medium-5" href="<?php the_permalink() ?>"><?php the_post_thumbnail('small'); ?></a>
		<div class="cell medium-offset-1 medium-6"><?php the_excerpt(); ?></div>
	</section> <!-- end article section -->					    						
</article> <!-- end article -->
