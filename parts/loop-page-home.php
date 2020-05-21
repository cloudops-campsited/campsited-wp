<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
<section id="hero">
<div class="grid-container grid-container-padded">
<div class="grid-x">
<header class="small-12 medium-10 large-10 cell">
<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
<!-- <?php  echo '<p class="h6">' . get_the_excerpt() . '</p>' ?> -->
</header> <!-- end article header -->
</div>
</div>
<?php if ( has_post_thumbnail() ) {
  $attr = array( 'id' => 'hero-img-id', );
  the_post_thumbnail('full', $attr);
}
?>

<?php get_template_part( 'parts/content', 'campingsearch' ); ?>
</section>


<section class="grid-container grid-container-padded entry-content" itemprop="articleBody">
<?php the_content(); ?>
</section> <!-- end article section -->
</article> <!-- end article -->