<article <?php post_class(); ?>>
	<header class="hentry-header">
		<h2 class="hentry-title title--md"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="hentry-content">
		<?php the_content(); ?>
	</div>
</article>

<hr class="divider">