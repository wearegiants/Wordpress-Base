<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row">
<section id="content" role="main" class="<?php echo $mainContent_width; ?>">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>
  <?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
