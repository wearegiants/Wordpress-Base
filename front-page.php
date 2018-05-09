<?php get_header(); ?>

<article <?php post_class('page'); ?>>
  <header class="page-header">
    <div class="fs-row">
      <div class="fs-cell">
        <h1 class="page-header__title"><?php the_title(); ?></h1>
      </div>
    </div>
  </header>
  <div class="page-content">
    <div class="fs-row">
      <div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3">
        <?php the_post(); the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>