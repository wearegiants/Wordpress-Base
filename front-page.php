<?php 

	Themewrangler::setup_page();get_header(); 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-lg', true);
	$thumb_url = $thumb_url_array[0];
  $images = get_field('gallery');

?>

<div class="home-mission pinned pinned--top hero hero--lg">
  <div class="centered">
    <div class="fs-row">
      <div class="fs-cell fs-all-full color--white text-center">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<div class="carousel home-carousel" data-carousel-options='{"controls": false, "single": true, "lazy":true, "theme":"fs-light"}'>
<?php foreach($images as $image): ?>
  <div class="home-carousel__slide carousel__slide">
    <?php if($image['caption']): ?>
    <div class="home-carousel__slide-caption pinned pinned--bottom">
      <div class="fs-row">
        <div class="fs-cell fs-all-full text-center">
          <?php echo $image['caption']; ?>
          <hr class="invisible compact">
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="hero hero--lg wallpaper" data-background-options='{"source":"<?php echo $image["url"]; ?>"}'></div>
  </div>
<?php endforeach; ?>
</div>

<hr class="invisible">

<div class="home-sections">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
          <div class="hero relative">
            <div class="hero--sm bg--gray pinned pinned--bottom"></div>
          </div>
        </div>
        <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
          <div class="hero relative">
            <div class="hero bg--gray pinned pinned--bottom"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="invisible">
  <div class="fs-row">
    <div class="fs-cell fs-lg-10 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
          <div class="hero relative">
            <div class="hero bg--gray pinned pinned--bottom"></div>
          </div>
        </div>
        <div class="fs-cell fs-lg-half fs-md-half fs-sm-3">
          <div class="hero relative">
            <div class="hero--sm bg--gray pinned pinned--top"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="invisible">
  <div class="fs-row">
    <div class="fs-cell fs-lg-11 fs-md-5 fs-sm-3 fs-centered">
      <div class="fs-row">
        <div class="fs-cell fs-all-full">
          <div class="hero relative">
            <div class="hero bg--gray pinned pinned--bottom"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>