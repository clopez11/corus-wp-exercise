<?php
/**
* Template Name: Gallery
**/
get_header();
query_posts(array(
   'post_type' => 'gallery'
)); ?>
<?php
			while (have_posts()) : the_post(); ?>
				<div class="main-gallery-wrapper">
					<div class="main-gallery-container">
						<h2 class="main-gallery-title"><?php the_field('title'); ?></h2>	
					</div>
					<div class="main-gallery">
					  <div class="img-gallery1">
					  	<img src="<?php the_field('image1'); ?>" />
					  </div>
					  <div class="img-gallery2">
					  	<img src="<?php the_field('image2'); ?>" />
					  </div>
					  <div class="img-gallery3">
					  	<img src="<?php the_field('image3'); ?>" />
					  </div>
					</div>											
				</div>
			<?php endwhile; ?>