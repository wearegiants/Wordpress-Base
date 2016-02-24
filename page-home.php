<?php 

	Themewrangler::setup_page();get_header(/***Template Name: Home Page */); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];

?>

<div class="home__hero hero--wh wallpaper bg--black relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered centered__bottom">
		<div class="fs-row">
			<div class="fs-cell fs-all-full color--white">
				<span class="title title--xl title--bold">Surf Los Angeles</span><br>
				<span class="title title--xl">Noon Goons</span><br><br>
				<span class="accent">View Case Study</span>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>