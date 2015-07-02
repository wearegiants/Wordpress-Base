<?php Themewrangler::setup_page();get_header(/***Template Name: Angular */); ?>

<div ng-controller="mycontroller" class="fs-row">
  <article ng-repeat="post in posts" class="fs-cell fs-all-full">
    <a href="{{ post.link }}"><h3>{{ post.title }}</h3></a>
    <p>{{ post.content }}</p>
    <hr class="invisible">
  </article>
</div>

<?php get_footer(); ?>