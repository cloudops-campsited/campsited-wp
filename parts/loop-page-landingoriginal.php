<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
<div class="hero-area">
<img id="hero-img-id" class="" alt="Hero Image" src="https://campsited-production.s3-eu-west-1.amazonaws.com/misc/static/landings/default_landing_hero_image.jpg"/>
<div class="hero-content-div">
<div class="bread-crumbs-div">
	<ul>
		<li class="bread-crumbs-link"><a style="color:white" href="https://www.campsited.com/<?php echo substr(get_locale(), 0, strpos(get_locale(), '_'));?>">campsited.com</a></li><li>></li>
		<li class="bread-crumbs-link"><a style="color:white" href="<?php echo get_country_permalink()?>">France</a></li>
		<?php
		$region = get_custom_field('region');
		$region_url = get_breadcrumb_region_url();
		if (!is_null($region)) {
			echo '<li>></li><li class="bread-crumbs-link"><a style="color:white" href="', $region_url, '">', $region, '</a></li>';
		}
		?>
		<?php
		$department = get_custom_field('department');
		if (!is_null($department)) {
			$department_url = get_breadcrumb_department_url();
			echo '<li>></li><li class="bread-crumbs-link"><a style="color:white" href="', $department_url, '">', $department, '</a></li>';
		}
		?>
		<?php
		$long_tail_name = get_custom_field('long_tail_name');
		if (!is_null($long_tail_name)) {
			echo '<li>></li><li class="bread-crumbs-link bread-crumbs-long-tail">', $long_tail_name, '</li>';
		}
		?>
	</ul>
</div>
<div class="hero-area-header">
	<h1 id="hero-header-h1"><?php the_title();?></h1>
	<div class="trust-pilot-hero-div">
		<div class="trustpilot-widget" data-locale="fr-FR" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="578a1e7f0000ff000592641c" data-style-height="24px" data-style-width="300px" data-theme="dark">
			<a href="https://fr.trustpilot.com/review/www.campsited.com" target="_blank" rel="noopener">Trustpilot</a>
		</div>
	</div>
</div>
<div class="widget">
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
<div style="display:none;" id="post_id"><?php echo the_ID();?></div>
<div style="display:none;" id="post_status"><?php echo get_post_status();?></div>
<div style="display:none;" id="cards_query_string"><?php echo get_custom_field('cards_query_string');?></div>
<div style="display:none;" id="title"><?php echo the_title();?></div>
<div style="display:none;" id="permalink"><?php echo the_permalink();?></div>
<div style="display:none;" id="short-locale"><?php echo substr(get_locale(), 0, strpos(get_locale(), '_'));?></div>
</div>
</div>
<div class="content-body">
<div class="content-body-top">
<div class="content-body-top-inner">
	<div class="top-seo-section seo-text">
		<?php
		$cards_header_text = get_custom_field('cards_header_text');
		if (!is_null($cards_header_text)) {
			echo '<h2 id="cards-header-h2">', $cards_header_text, '</h2>';
		}
		?>
		<div id="top-seo-content">
			<?php
			echo get_landing_top_content();
			?>
			<div class="landing-results-div">
				<h3><?php _e('Choose from', 'landings')?> <span id="campsite-count-id"><?php _e('lots of', 'landings')?></span> <?php _e('great campsites', 'landings')?></h3>
				<div class="landing-results-div-left">
					<div id="card-holder" class="card-holder-div"></div>
				</div>
				<div class="landing-results-div-right">
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
					<div class="trust-pilot-right-div">
						<div class="trustpilot-widget" data-locale="fr-FR" data-template-id="5419b732fbfb950b10de65e5" data-businessunit-id="578a1e7f0000ff000592641c" data-style-height="24px" data-style-width="100%" data-theme="light">
							<a href="https://fr.trustpilot.com/review/www.campsited.com" target="_blank" rel="noopener">Trustpilot</a>
						</div>
					</div>
					<div class="support-div">
						<div class="support-top">
							<h4>Contact Anna</h4>
							<p><?php _e('We are here to help you plan your perfect holiday','landings')?></p>
							<div class="support-top-img-div">
								<img alt="Support contact person" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/Anna.svg"/>
							</div>
						</div>
						<div class="contact-nums">
							<p><span style="font-weight:bold;">FR:</span> +33 338 0501 1156</p>
							<p><span style="font-weight:bold;">UK:</span> +44 121 318 5585</p>
							<p><span style="font-weight:bold;">IRE:</span> +353 64 664 6029</p>
							<p>help@campsited.com</p>
						</div>
						<div class="contact-hours">
							<p><span style="font-weight:bold;">Mon - Fri:</span> 10h to 6.30h</p>
						</div>
						<div class="trust-info">
							<div class="trust-info-item">
								<div class="trust-info-item-left">
									<img alt="The best prices with no hidden fees" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/trust_euro.png"/>
								</div>
								<div class="trust-info-item-right">
									<h4><?php _e('Best Prices','landings')?></h4>
									<p><?php _e('No hidden fees','landings')?></p>
								</div>
							</div>
							<div class="trust-info-item">
								<div class="trust-info-item-left">
									<img alt="Over 10,000 rentals and pitches" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/trust_choice.png"/>
								</div>
								<div class="trust-info-item-right">
									<h4><?php _e('Largest Choice','landings')?></h4>
									<p><?php _e('Over 10,000 rentals and pitches','landings')?></p>
								</div>
							</div>
							<div class="trust-info-item">
								<div class="trust-info-item-left">
									<img alt="Thousands of Reviews from real guests" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/trust_tick.png"/>
								</div>
								<div class="trust-info-item-right">
									<h4><?php _e('Thousands of Reviews','landings')?></h4>
									<p><?php _e('From real guests','landings')?></p>
								</div>
							</div>
							<div class="trust-info-item">
								<div class="trust-info-item-left">
									<img alt="Safe, secure and fast booking" src="https://d3hwa4095hqcjz.cloudfront.net/misc/static/landings/trust_secure.png"/>
								</div>
								<div class="trust-info-item-right">
									<h4><?php _e('100% Secure','landings')?></h4>
									<p><?php _e('Safe, secure and fast booking','landings')?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view-all-button-holder">
				<a id="view-all-btn-id" href="https://www.campsited.com/campsites_search/results?utf8=%E2%9C%93&csf%5Bquery%5D=Occitania&csf%5Bdate_from%5D=&csf%5Bdate_to%5D=&csf%5Badults_number%5D=2&csf%5Bchildren_number%5D=0&csf%5Baccommodation_type%5D=all&csf%5Bmode%5D=county">
					<div class="view-all-button"><?php _e('View all campsites','landings')?></div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
<div class="content-body-bottom">
<div class="bottom-seo-section seo-text">
	<?php
		echo get_landing_bottom_content();
	?>
</div>
<div class="green-divider">
</div>
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
<div class="filler" id="bottom-filler-id">
</div>
</div>
</div>
</article> <!-- end article -->
<?php getCards();?>