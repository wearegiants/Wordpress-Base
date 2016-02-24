<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

?>

<div class="home__hero hero--lg hero__bg--covered bg--black relative" style="background-image: url(<?php echo $thumb_url; ?>);">
	<div class="hero__centered">
		<div class="fs-row">
			<div class="fs-cell fs-all-full">
				<h1 class="color--white"><?php the_title(); ?></h1>
				<a href="#" class="btn bg--white color--black">Learn More</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>