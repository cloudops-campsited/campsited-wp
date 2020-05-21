<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">

<section id="hero">
<div class="grid-container">
<div class="grid-x grid-margin-x">
<header class="small-12 medium-6 large-6 cell">
<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
</header>
</div>
</div>
<div class="gradient">
<?php if ( has_post_thumbnail() ) {
  $attr = array( 'id' => 'hero-img-id', );
  the_post_thumbnail('full', $attr);
} ?>
</div>
</section>

<section class="grid-container entry-content" itemprop="articleBody">
<div class="grid-x grid-margin-x">
<div class="medium-6 cell">
<h2>Pages</h2>
<ul class="sitemap">
<?php
$myposts = get_posts('numberposts=-1&post_type=page'); foreach($myposts as $post) : ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>

</div>
<div class="medium-6 cell">
<h2>Blog posts</h2>
<ul class="sitemap">
<?php $lastposts = get_posts(array('numberposts' => -1));
if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; wp_reset_postdata(); }?>
</ul>
</div>
</div>
</section> <!-- end article section -->
</article> <!-- end article -->