<?php get_header(); ?>
<div class="container-fluid" id="breadcrumb">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 breadcrumb">
          <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
        </div>
      </div>
    </div>
  </div>
</div> 
<!--breadcrumb-->
<div class="container">
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-single' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>