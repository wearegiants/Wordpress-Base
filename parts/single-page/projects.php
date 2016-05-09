<?php 

if ( get_query_var('paged') ) {
  $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
  $paged = get_query_var('page');
} else {
  $paged = 1;
}

$query = array(
  'posts_per_page'  => 2,
  'post_parent'     => 2,
  'post_type'       => 'page',
  'paged'						=> $paged,
#  'orderby'         => 'meta_value_num',
#  'meta_key'        => 'year',
);

$temp = $wp_query; 
$wp_query = null; 
$wp_query = new WP_Query(); 
$wp_query->query($query);

?>
<div class="covered relative" data-background-options='{"source":"<?php echo $thumb_url; ?>"}'>
	<div class="centered centered__bottom">
		<div id="page-content">
		<div id="page-content__inner">
			<div class="fs-row">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
				<div class="fs-cell fs-all-full color--black">
					<span class="title title--xl title--bold"><?php the_title(); ?></span><br>
					<a href="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>" class="ajax-link btn btn--link accent">View Project</a>
				</div>
				<?php endwhile; ?>
				<nav id="page-nav" class="fs-cell fs-all-full color--black">
					<?php previous_posts_link('&laquo; Newer') ?>
					<?php next_posts_link('Older &raquo;') ?>
				</nav>

				<?php 
					$wp_query = null; 
					$wp_query = $temp;  // Reset
				?>
			</div>
		</div>
		</div>
	</div>
</div>