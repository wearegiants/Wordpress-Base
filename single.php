<?php Themewrangler::setup_page();get_header(); ?>

<?php the_post(); ?>

<article <?php post_class('page'); ?>>
  <header class="page-header">
    <div class="hero relative bg--black wallpaper" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
      <div class="centered">
        <div class="fs-row">
          <div class="fs-cell fs-all-full">
            <h1 class="page-header__title color--white"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <hr class="invisible">
  <div id="page-content" class="hentry__content">
    <div class="fs-row">
      <div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3">
        <?php the_post(); the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>