<?php Themewrangler::setup_page();get_header(); ?>

<article <?php post_class('page'); ?>>
  <div class="page-content page-content--attachment">
    <div class="fs-row">
      <div class="fs-cell fs-all-full">
        <?php $image_size = apply_filters( 'wporg_attachment_size', 'original' ); ?>
        <?php echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
        <hr class="invisible compact">
        <figure><figcaption><?php the_title(); ?></figcaption></figure>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>