<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">

<section id="hero">
<div class="grid-container">
<div class="grid-x grid-margin-x">
<?php get_template_part( 'parts/content', 'breadcrumbs' ); ?>
<header class="small-12 medium-5 medium-offset-1 large-5 cell">
<h1 itemprop="headline" class="page-title"><?php the_title(); ?></h1>
</header>
<?php if ( is_active_sidebar( 'landingunderheading' ) ) : ?>
<?php dynamic_sidebar( 'landingunderheading' ); ?>
<?php else : ?>
<!-- This content shows up if there are no widgets defined in the backend. -->		
<div class="alert help">
<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
</div>
<?php endif; ?>
</div>
</div>
<div class="gradient">
<?php if ( has_post_thumbnail() ) {
  $attr = array( 'id' => 'hero-img-id', );
  the_post_thumbnail('full', $attr);
} else {  
	$region = get_custom_field('region');
	$region_url = get_breadcrumb_region_url();
	echo '<img id="hero-img-id" alt="Campings in ', $region, '" src="https://campsited-production.s3-eu-west-1.amazonaws.com/misc/static/landings/default_landing_hero_image.jpg"/></a></li>';
}
?>
</div>


<div class="small-12 medium-6 large-6 cell">
	<div class="searchwidget">
		<div id="campsited-white-label" style="height:600px; max-width:1140px">
			<script type="text/javascript">
				(function(d, f, id) {
					e = d.createElement(f);
			e.src = "<?php echo get_widget_url()?>";
			e.width = "100%"; e.height = "100%"; e.frameBorder = "0"; e.scrolling = "no";
			p = d.getElementById(id); p.appendChild(e);
			}(document, 'iframe', 'campsited-white-label'));
			</script>
		</div>
	</div>
	<div id="post_id"><?php echo the_ID();?></div>
	<div id="post_status"><?php echo get_post_status();?></div>
	<div id="cards_query_string"><?php echo get_custom_field('cards_query_string');?></div>
	<div id="title"><?php echo the_title();?></div>
	<div id="permalink"><?php echo the_permalink();?></div>
	<div id="short-locale"><?php echo substr(get_locale(), 0, strpos(get_locale(), '_'));?></div>
</div>
</section>

<section class="lightgray">
<div class="grid-container">
<div class="grid-x grid-padding-x">

<div id="seo-content" class="small-12 cell">
<?php $cards_header_text = get_custom_field('cards_header_text');
if (!is_null($cards_header_text)) {
	echo '<h2>', $cards_header_text, '</h2>';
} ?>
<?php the_content(); ?>
</div>

<div id="cards-results" class="small-12 medium-8 large-8 cell">
	<h3><?php _e('Choose from', 'landings')?> <span id="campsite-count-id"><?php _e('lots of', 'landings')?></span> <?php _e('great campsites', 'landings')?></h3>
	<div id="card-holder" class="card-holder-div"></div>
	<a id="view-all-btn-id" href="https://www.campsited.com/campsites_search/results?utf8=%E2%9C%93&csf%5Bquery%5D=Occitania&csf%5Bdate_from%5D=&csf%5Bdate_to%5D=&csf%5Badults_number%5D=2&csf%5Bchildren_number%5D=0&csf%5Baccommodation_type%5D=all&csf%5Bmode%5D=county">
	<p class="text-center view-all-button"><?php _e('View all campsites','landings')?></p>
	</a>
</div>


<aside class="small-12 medium-4 large-4 cell">
<div class="map-holder">
	<div class="map-holder-inner">
		<a id="map-link-id" href="https://www.campsited.com">
			<img id="map-img-id" style="min-height:190px;" alt="Location map" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/default_map_grey.png"/>
			<div class="view-all-button view-all-map-button">
				<?php _e('View all', 'landings')?>
			</div>
		</a>
	</div>
</div>
<?php if ( is_active_sidebar( 'sidebarlanding' ) ) : ?>
<?php dynamic_sidebar( 'sidebarlanding' ); ?>
<?php else : ?>
<div class="alert help">
<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
</div>
<?php endif; ?>
</aside>


</section>

<!-- <section id="links" class="grid-container">
<div class="grid-x grid-padding-x grid-margin-x">
<div class="cell small-12">
	<?php
		echo get_landing_bottom_content();
	?>
<div id="landing-links-header-id">
	<?php
	$links_header_text = get_custom_field('links_header_text');
	if (!is_null($links_header_text)) {
		echo '<h2>', $links_header_text, '</h2>';
	} else {
	?>
	<?php echo '<h2>' . __('Some links to other campsites', 'landings') . '</h2>'; ?>
	<?php
	}
	?>
</div>

<div class="landing-links-div" id="landing-links-div-id">
</div>

</div>
</div>
</section> -->

<?php getCards();?>