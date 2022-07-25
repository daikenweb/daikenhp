<?php get_header(); ?>
<?php if ( !is_home() && !is_front_page() ) : ?>
<div class="container-fluid" id="breadcrumb">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12  breadcrumb">
          <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
      </div>
    </div>
  </div>
</div> 
<!--breadcrumb-->
<?php endif; ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>