<?php
/**
 * Template part for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x grid-margin-x'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header medium-8 cell">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_post_thumbnail('full'); ?>
	</header> <!-- end article header -->				
    <section class="entry-content medium-8 cell" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->					
	<footer class="article-footer medium-8 cell">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->					    
	<?php comments_template(); ?>				
</article> <!-- end article -->