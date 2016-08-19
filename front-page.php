<?php 

	Themewrangler::setup_page();get_header(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
  $images = get_field('gallery');

?>

<div class="home-page">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<div class="carousel" data-carousel-options='{"theme":"fs-light"}'>
<?php foreach($images as $image): ?>
  <div class="home-carousel__slide carousel__slide">
    <div class="hero hero--wh wallpaper" data-background-options='{"source":"<?php echo $image["url"]; ?>"}'></div>
  </div>
<?php endforeach; ?>
</div>



<?php get_footer(); ?>