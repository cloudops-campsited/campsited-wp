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


<section class="grid-container grid-container-padded entry-content" itemprop="articleBody">
<?php the_content(); ?>
</section> <!-- end article section -->
</article> <!-- end article -->