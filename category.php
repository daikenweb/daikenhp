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
<header class="header archive">
<h1 class="entry-title"><?php single_cat_title(); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>