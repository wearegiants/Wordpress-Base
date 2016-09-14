<?php Themewrangler::setup_page();get_header(); ?>

<?php the_post(); ?>
<article <?php post_class(); ?>>

	<header class="hentry__header">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3">
				<h1 class="hentry-title title--lg"><?php the_title(); ?></h1>
				<div class="accent accent--sm"><?php the_breadcrumb(); ?></div>
			</div>
		</div>
	</header>
	
	<div class="hentry-content">
		<div class="fs-row">
			<div class="fs-cell fs-lg-8 fs-md-5 fs-sm-3">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</article>

<?php get_footer(); ?>