<?php
/**
 * Template part for displaying page content in page.php
 */
?>
<div class="grid-container white">
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_post_thumbnail('full'); ?>
	</header> <!-- end article header -->				
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	</section> <!-- end article section -->				    				
</article> <!-- end article -->
</div>