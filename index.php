<?php Themewrangler::setup_page();get_header(); ?>

<div class="fs-row">
<section id="content" role="main" class="fs-cell fs-lg-7 fs-md-4 fs-sm-3">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>