<?php 
  get_header(); 
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'gallery-xl', true);
  $thumb_url = $thumb_url_array[0];
?>

<div <?php post_class('page'); ?>>
  <div class="page-header">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>