<?php 

	Themewrangler::setup_page();get_header(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
  $images = get_field('gallery');

?>
<div class="hero hero--wh relative">
  <div class="home-mission pinned pinned--top">
    <div class="fs-row">
      <div class="fs-cell fs-all-full color--white">
        <hr class="invisible">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="carousel home-carousel" data-carousel-options='{"single": true, "lazy":true, "theme":"fs-light"}'>
  <?php foreach($images as $image): ?>
    <div class="home-carousel__slide carousel__slide">
      <?php if($image['caption']): ?>
      <div class="home-carousel__slide-caption pinned pinned--bottom">
        <div class="fs-row">
          <div class="fs-cell fs-all-full">
            <?php echo $image['caption']; ?>
            <hr class="invisible compact">
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="hero hero--wh wallpaper" data-background-options='{"source":"<?php echo $image["url"]; ?>"}'></div>
    </div>
  <?php endforeach; ?>
  </div>
</div>



<?php get_footer(); ?>