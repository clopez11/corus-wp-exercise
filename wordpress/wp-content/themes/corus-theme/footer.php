<?php
/**
* Template Name: Footer
**/
?>
	<footer id="main-footer-wrapper">
		<div class="main-footer">
			<p class="footer-copyright">All Rights Reserved. &copy; 2019 Corus WP Exercise.</p>
			<ul class="footer-list">
				<li class="footer-link-item"><a id="footer-first-link" class="footer-links" href="<?php echo site_url('/home/') ?>">Home</a></li>
				<li class="footer-link-item"><a class="footer-links" href="<?php echo site_url('/gallery/') ?>">Gallery</a></li>
				<li class="footer-link-item"><a class="footer-links" href="<?php echo site_url('/contact/') ?>">Contact</a></li>
			</ul>			
		</div>		
	</footer>
	<?php wp_footer(); ?>