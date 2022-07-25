<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="archive col-md-12 col-sm-12 col-xs-12">
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
</header>
<?php if(has_post_thumbnail()): ?>
<div class="archive col-md-6 col-xs-12">
<p class="archive_thumb">
<?php if(!is_single()): ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(‘full’); } ?></a><?php endif; ?>
</p>
</div>
<div class="archive col-md-6 col-xs-12">
<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</div>
<?php else: ?>
<div class="archive col-md-12 col-xs-12">
<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</div>
<?php endif; ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>
<div class="archive col-md-12 col-xs-12">
<p class="dotted-line">&nbsp;</p>
</div>
