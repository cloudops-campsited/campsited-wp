<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">

<section id="internal" class="grid-x grid-margin-x">
<header class="cell medium-5 medium-offset-1">
<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
<?php the_excerpt(); ?>
</header> <!-- end article header -->
<div class="cell medium-6">
<?php the_post_thumbnail('full'); ?>
</div>
</section>


<section class="grid-container grid-container-padded entry-content" itemprop="articleBody">
<div class="grid-x grid-margin-x">
<div class="cell medium-3">
	<?php if ( $post->post_parent ) { ?>
    <h4><a href="<?php echo get_permalink( $post->post_parent ); ?>" >
      <?php echo get_the_title( $post->post_parent ); ?>
    </a></h4>
    <?php } ?>
    <?php
    if ( $post->post_parent ) {
    $children = wp_list_pages( array(
    'title_li' => '',
    'child_of' => $post->post_parent,
    'echo'     => 0,
    'post_status' => 'publish'
    ) );
    } else {
    $children = wp_list_pages( array(
    'title_li' => '',
    'child_of' => $post->ID,
    'echo'     => 0,
    'post_status' => 'publish'
    ) );
    }
    
    if ( $children ) : ?>
    <ul class="no-bullet">
      <?php echo $children; ?>
    </ul>
    <?php endif; ?>

</div>
<div class="cell medium-offset-1 medium-8">
<?php the_content(); ?>
</div>
</div>
</section> <!-- end article section -->
</article> <!-- end article -->