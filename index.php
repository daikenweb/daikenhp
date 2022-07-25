<?php get_header(); ?>
<div class="container">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>
</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>