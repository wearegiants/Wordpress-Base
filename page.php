<?php Themewrangler::setup_page();get_header(); ?>

<div ng-controller="mycontroller">
	<article ng-repeat="post in posts">
		<h3>{{ post.title }}</h3>
		<p>{{ post.excerpt }}</p>
	</article>
</div>

<?php get_footer(); ?>