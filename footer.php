<?php
/**
* The template for displaying the footer. 
*
* Comtains closing divs for header.php.
*
* For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
*/			
?>


<footer role="contentinfo">
<section class="closing">
<div class="grid-container">
	<div class="grid-x">
		<!-- Closing area #1 -->
		<div class="small-12 medium-4 cell">
		<?php if ( is_active_sidebar( 'closing1' ) ) : ?>
		<?php dynamic_sidebar( 'closing1' ); ?>
		<?php else : ?>
		<!-- This content shows up if there are no widgets defined in the backend. -->		
		<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
		</div>
		<?php endif; ?>
		</div>
		<!-- Footer Widget area #1 -->
		<div class="small-12 medium-4 cell">
		<?php if ( is_active_sidebar( 'closing2' ) ) : ?>
		<?php dynamic_sidebar( 'closing2' ); ?>
		<?php else : ?>
		<!-- This content shows up if there are no widgets defined in the backend. -->		
		<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
		</div>
		<?php endif; ?>
		</div>
	    <!-- Footer Widget area #1 -->
		<div class="small-12 medium-4 cell">
		<?php if ( is_active_sidebar( 'closing3' ) ) : ?>
		<?php dynamic_sidebar( 'closing3' ); ?>
		<?php else : ?>
		<!-- This content shows up if there are no widgets defined in the backend. -->		
		<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
		</div>
		<?php endif; ?>
		</div>
	</div>
</div>
</section>
<section class="footer">
<div class="grid-container grid-container-padded">				
<div class="grid-x grid-margin-x">
	<!-- Footer Widget area #1 -->
	<div class="small-12 medium-6 cell">
	<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
	<?php dynamic_sidebar( 'footer1' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->		
	<div class="alert help">
	<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
	</div>
	<!-- Footer Widget area #2 -->
	<div class="small-12 medium-6 cell">
	<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
	<?php dynamic_sidebar( 'footer2' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->		
	<div class="alert help">
	<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
	</div>
	<!-- Footer Widget area #3 -->
	<div class="small-12 medium-6 cell">
	<?php if ( is_active_sidebar( 'footer3' ) ) : ?>
	<?php dynamic_sidebar( 'footer3' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->		
	<div class="alert help">
	<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
	</div>
	<!-- Footer Widget area #4 -->
	<div class="small-12 medium-6 cell">
	<?php if ( is_active_sidebar( 'footer4' ) ) : ?>
	<?php dynamic_sidebar( 'footer4' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->		
	<div class="alert help">
	<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
	</div>
</div><!-- End Widgets -->
</div>

<div class="grid-container grid-container-padded">
<div class="grid-x grid-margin-x">
	<div class="small-12 medium-12 cell">
	<?php if ( is_active_sidebar( 'footer5' ) ) : ?>
	<?php dynamic_sidebar( 'footer5' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->		
	<div class="alert help">
	<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
	</div>
	<hr>
	<div class="small-12 medium-8 cell">
	<nav role="navigation">
	<?php joints_footer_links(); ?>
	</nav>
	</div>	
	<div class="small-12 medium-4 cell">
		<p class="copyright float-right">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
	</div>	
</div>
</div>
</section>

</footer> <!-- end .footer -->
<?php wp_footer(); ?>
</body>	
</html> <!-- end page -->



