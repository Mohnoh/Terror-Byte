<?php get_header(); ?>
<h1 style="text-align:center;padding-top:100px;"><?php the_title(); ?></h1>
<div style="margin:2em;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; endif; ?>
</div>
<?php get_footer(); ?>
