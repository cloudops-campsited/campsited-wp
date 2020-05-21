<?php

if ( ! function_exists( 'campsited_landings_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function campsited_landings_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    load_theme_textdomain( 'landings', get_template_directory() . '/lang' );

}
endif;
add_action( 'after_setup_theme', 'campsited_landings_setup' );


function getCards() {
	?>
		<script>
			var title = document.getElementById('title').textContent;
			var post_id = document.getElementById('post_id').textContent;
			var post_status = document.getElementById('post_status').textContent;
			var cards_query_string = document.getElementById('cards_query_string').textContent;
			console.log("post status = " + post_status);
			var title = document.getElementById('title').textContent;
			var permalink = document.getElementById('permalink').textContent;
			var locale = document.getElementById('short-locale').textContent;
            console.log(title);
			console.log(permalink);
			
			var app = document.getElementById('card-holder');
			
			/*var hj = document.getElementById('_hj_feedback_container');
			if (hj != null) {
				hj.setAttribute('style', 'display:none');
			}
			var chat = document.getElementById('button');
			if (chat != null) {
				chat.setAttribute('style', 'display:none');
			}
			
			var smc = document.getElementById('at4-share');
			if (smc != null) {
				smc.setAttribute('style', 'display:none');
			}		*/	

			var container = document.createElement('div');
			container.setAttribute('class', 'card-container');

			app.appendChild(container);

			var script_tag = document.getElementById('cards_js')
			var search_url_prefix = props.search_url_prefix;

			var landingIdParam = "&landingId="+post_id;
			var landingStatusParam = "&status="+post_status;
			var localeParam = "&locale="+locale;
			var titleParam = "&title="+title;
			var relativeUrlParam = "&relativeUrl="+permalink;

			var cards_url = search_url_prefix + cards_query_string;
			console.log("cards_url = "+cards_url);

			var request = new XMLHttpRequest();
			var theUrl = search_url_prefix + cards_query_string + localeParam + titleParam + relativeUrlParam + landingIdParam + landingStatusParam;
			console.log(theUrl);
			request.open('GET', theUrl, true);
			request.setRequestHeader('Access-Control-Allow-Headers', '*');

			request.onload = function () {

				// Begin accessing JSON data here
				var data = JSON.parse(this.responseText);

				if (request.status >= 200 && request.status < 400) {
					
					/*	Jaime: Serving image from WordPress rather than AWS

					var heroImg = document.getElementById('hero-img-id');
					if (data.flagShipImgUrl != null) {
						heroImg.src = data.flagShipImgUrl;
					}*/
					
					var campsites = data.campsiteSummaryList;
					var campsiteCount = data.totalNumberOfCampsites;

					var mapImg = document.getElementById("map-img-id");
					console.log("Map url src = "+data.mapUrl);
					if (data.mapUrl != null) {
						mapImg.src = data.mapUrl;
					}

					var mapLink = document.getElementById("map-link-id");
					mapLink.setAttribute("href", data.searchUrl);

					//var mapBtnLink = document.getElementById("view-all-map-btn-id");
					//mapBtnLink.setAttribute("href", data.searchUrl);
          
		      		var viewAllLink = document.getElementById("view-all-btn-id");
   		    		viewAllLink.setAttribute("href", data.searchUrl);

					document.getElementById("campsite-count-id").innerHTML = campsiteCount;

					campsites.forEach(campsite => {

						var campsiteLink = campsite.campsiteUrl;
						var cardLink = document.createElement('a');
						cardLink.href = campsiteLink;
						
						console.log("hello");

						var card = document.createElement('div');
						card.setAttribute('class', 'card');

						var img = document.createElement('img');
						img.src = campsite.campsiteImgUrl;

						//cardLink.appendChild(img);
						//card.appendChild(cardLink);

						var cardInfoDiv = document.createElement('div');
						cardInfoDiv.setAttribute('class', 'card-info-div');

						var cardHeaderLeftDiv = document.createElement('div');
						cardHeaderLeftDiv.setAttribute('class', 'card-header-left-div');

						var cardHeaderRightDiv = document.createElement('div');
						cardHeaderRightDiv.setAttribute('class', 'card-header-right-div');

						var campsiteNameHeader = document.createElement('h3');
						campsiteNameHeader.textContent = campsite.campsiteName;
						cardHeaderLeftDiv.appendChild(campsiteNameHeader);

						var starsDiv = document.createElement('div');
						starsDiv.setAttribute('class', 'stars-div');
						cardHeaderLeftDiv.appendChild(starsDiv);
						for (var i = 0; i < campsite.numOfStars; i++) {
							var starDiv = document.createElement('div');
							starDiv.setAttribute('class', 'star-div');
							//starDiv.textContent = "*";
							starsDiv.appendChild(starDiv);
						}

						var ratingDiv = document.createElement('div');
						ratingDiv.setAttribute('class', 'card-rating-div');
						ratingDiv.textContent = campsite.rating;
						cardHeaderRightDiv.appendChild(ratingDiv);

						var reviewsDiv = document.createElement('div');
						reviewsDiv.setAttribute('class', 'card-reviews-div');
						reviewsDiv.textContent = campsite.numOfReviews + " Reviews";
						cardHeaderRightDiv.appendChild(reviewsDiv);

						var amenityDivOuter = document.createElement('div');
						amenityDivOuter.setAttribute('class', 'card-amenities-div');
						var amenities = campsite.amenities;
						amenities.forEach(amenity => {
							var amenityDiv = document.createElement('div');
							amenityDiv.setAttribute('class', 'card-amenity-div');
							var amenityTickDiv = document.createElement('div');
							amenityTickDiv.setAttribute('class', 'card-amentity-tick-div');
							var amenityTextDiv = document.createElement('div');
							amenityTextDiv.setAttribute('class', 'card-amentity-text-div');
							amenityTextDiv.textContent = amenity;
							amenityDiv.appendChild(amenityTickDiv);
							amenityDiv.appendChild(amenityTextDiv);
							amenityDivOuter.appendChild(amenityDiv);
						});

						var priceDiv = document.createElement('div');
						priceDiv.setAttribute('class', 'card-price-div');
						/*if (campsite.promoPriceFinalPrice != null) {
							var newHTML = "<span style='font-weight:bold'>\u20AC" + campsite.promoPriceFinalPrice + "</span> for 7 nights";
						} else {
							var newHTML = "From <span style='font-weight:bold'>\u20AC" + campsite.promoPrice + "</span> per night";
						}*/
						if (locale == "fr") {
							var newHTML = "D&egrave;s <span style='font-weight:bold'>" + campsite.promoPrice + "\u20AC</span> par nuit";
						} else  {
							var newHTML = "From <span style='font-weight:bold'>\u20AC" + campsite.promoPrice + "</span> per night";
						}
						priceDiv.innerHTML = newHTML;

						cardInfoDiv.appendChild(cardHeaderLeftDiv);
						cardInfoDiv.appendChild(cardHeaderRightDiv);
						cardInfoDiv.appendChild(amenityDivOuter);
						cardInfoDiv.appendChild(priceDiv);

						card.appendChild(img);
						card.appendChild(cardInfoDiv);

						cardLink.appendChild(card);

						container.appendChild(cardLink);
					});
                    
     				// var landingLinks = data.landingLinkList;
					// if (landingLinks.length > 0) {
					// 	var linksDiv = document.getElementById("landing-links-div-id");
					// 	if (cards_query_string.includes("country=")) {
					// 		console.log("This is a country landing");
					// 		linksDiv.setAttribute('class', 'landing-links-level1-div landing-links-div');
					// 	}
					// 	landingLinks.forEach(landingLink => {
					// 		//console.log(landingLink.label);
					// 		var landingLinkElement = document.createElement('a');
					// 		//landingLinkElement.setAttribute('style', 'color:#25bd53');
					// 		landingLinkElement.href = landingLink.relativeUrl;
					// 		landingLinkElement.innerHTML  = landingLink.label;
					// 		linksDiv.appendChild(landingLinkElement);
					// 	});
					// } else {
					// 	var linksHeader = document.getElementById("landing-links-header-id");
					// 	linksHeader.setAttribute('style', 'display:none');
					// 	var bottomFiller = document.getElementById("bottom-filler-id");
					// 	bottomFiller.setAttribute('style', 'display:none');						
					// }
				}
			}
			request.send();

		</script>
	<?php
}


function get_custom_field($field) {
	$field = get_post_meta(get_the_ID(), $field, true);
	if (strlen($field) > 0) {
		return $field;
	} else {
		return null;
	}
}

function get_landing_top_content() {
	$full_content = get_the_content(get_the_ID());
	$break_chars = "#bottom_section";
	if (strpos($full_content, $break_chars) !== false) {
		$top_content = substr($full_content, 0, strpos($full_content, $break_chars));
		return $top_content;
	}
	return $full_content;
}

function get_landing_bottom_content() {
	$full_content = get_the_content(get_the_ID());
	$break_chars_bottom_section = "#bottom_section";
	$break_chars_links_section = "#links_section";
	$bottom_content = "";
	if (strpos($full_content, $break_chars_links_section) == false) { // no links section
		if (strpos($full_content, $break_chars_bottom_section) !== false) {
			$pos = strpos($full_content, $break_chars_bottom_section) + 15;
			$bottom_content = substr($full_content, $pos);
		}
	} else {
		// Need to account for Links section
		$bottom_content = getBetween($full_content, $break_chars_bottom_section , $break_chars_links_section);
	}
	return $bottom_content;
}

function get_links_content() {
	$full_content = get_the_content(get_the_ID());
	$break_chars = "#links_section";
	$links_content = "";
	if (strpos($full_content, $break_chars) !== false) {
		$pos = strpos($full_content, $break_chars) + 14;
		$links_content = substr($full_content, $pos);
	}
	return $links_content;
}

function get_breadcrumb_region_url() {
	$slash = "/";
	$region = get_post_meta(get_the_ID(), "region_permalink", true);
	$url_prefix = get_url_prefix();
	$url = $url_prefix.$region.$slash;
	return $url;
}

function get_breadcrumb_department_url() {
	$slash = "/";
	$region = get_post_meta(get_the_ID(), "region", true);
	$department = get_post_meta(get_the_ID(), "department_permalink", true);
	$url_prefix = get_url_prefix();
	$url = $url_prefix.$department.$slash;
	return $url;
}

function getBetween($string, $start = "", $end = ""){
    if (strpos($string, $start)) { // required if $start not exist in $string
        $startCharCount = strpos($string, $start) + strlen($start);
        $firstSubStr = substr($string, $startCharCount, strlen($string));
        $endCharCount = strpos($firstSubStr, $end);
        if ($endCharCount == 0) {
            $endCharCount = strlen($firstSubStr);
        }
        return substr($firstSubStr, 0, $endCharCount);
    } else {
        return '';
    }
}

function get_url_prefix() {
	$locale = substr(pll_current_language('locale'), 0, strpos(pll_current_language('locale'), '_'));
	//echo '<script>console.log("Locale : ' . $locale . '")</script>';
	
	//$url_prefix = "/".$locale."/france/";
	$url_prefix = "https://www.campsited.com/".$locale."/campings-france/";
	return $url_prefix;
}

function getlocalisedLink($link) {
	$locale = substr(pll_current_language('locale'), 0, strpos(pll_current_language('locale'), '_'));
	$slash = "/";
	$dotcom = ".com";
	$newLinkStart = substr($link, 0, strpos($link, '.com/'));
	$newLinkEnd = substr($link, strpos($link, '.com/')+5, strlen($link));
	$newLink = $newLinkStart.$dotcom.$slash.$locale.$slash.$newLinkEnd;
	//echo '<script>console.log("New Link : ' . $newLink . '")</script>';
	return $newLink;
}

function get_widget_url() {
	$locale = substr(pll_current_language('locale'), 0, strpos(pll_current_language('locale'), '_'));
	$slash = "/";
  	$linkStart = "https://www.campsited.com/";
  	$linkEnd = "white_labels/10";

	$destination = "";
	$queryStr=get_custom_field("cards_query_string");
	if ($queryStr !== null) {
		if (strpos($queryStr, '?region=') !== false) {
			$destination = get_custom_field("region");
		} else if (strpos($queryStr, '?department=') !== false) {
			$destination = get_custom_field("department");
		} else if (strpos($queryStr, '?old_region=') !== false) {
			$destination = get_custom_field("region");
		} else if (strpos($queryStr, '?') !== false) {
			$posStart = strpos($queryStr, '=') + 1;
			if (strpos($queryStr, '&') !== false) {
				$posEnd = strpos($queryStr, '&');
				$destination = substr($queryStr, $posStart, $posEnd);
			} else {
				$destination = substr($queryStr, $posStart, strlen($queryStr));
			}
		}
	}
  	$widgetQueryStr = "?query=".$destination;
	//echo '<script>console.log("Widget Query : ' . $widgetQueryStr . '")</script>';
  	$link = $linkStart.$locale.$slash.$linkEnd.$widgetQueryStr;
  	return $link;

}

function get_country_permalink() {
	$locale = substr(pll_current_language('locale'), 0, strpos(pll_current_language('locale'), '_'));
	if (contains('FR', pll_current_language('locale')) == true) {
		return "https://www.campsited.com/fr/france/campings-en-france/";
	} else {
		return "https://www.campsited.com/en/france/campsites-france/";
	}
}

function contains($needle, $haystack) {
    return strpos($haystack, $needle) !== false;
}