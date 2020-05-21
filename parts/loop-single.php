<?php
/**
 * Template part for displaying a single post
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-container'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_post_thumbnail('full'); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
		<hr>
		<?php if (get_the_author_meta('description')) : // Checking if the user has added any author descript or not. If it is added only, then lets move ahead ?>
		<div class="author-box">
		<div class="author-img"><?php echo get_avatar(get_the_author_meta('user_email'), '100'); // Display the author gravatar image with the size of 100 ?></div>
		<h4 class="author-name"><?php esc_html(the_author_meta('display_name')); // Displays the author name of the posts ?></h4>
		<p class="author-description"><?php esc_textarea(the_author_meta('description')); // Displays the author description added in Biographical Info ?></p>
		</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'underblog' ) ) : ?>
		<?php dynamic_sidebar( 'underblog' ); ?>
		<?php else : ?>
		<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
		</div>
		<?php endif; ?>

		<div class="addthis_inline_share_toolbox"></div>

	</footer> <!-- end article footer -->
	<?php comments_template(); ?>	
													
</article> <!-- end article -->