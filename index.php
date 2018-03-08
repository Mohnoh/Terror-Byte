<!-- This will become the blog page -->
<?php get_header(); ?>
<div class="blog-spacer"></div>
  <div class="blog-right-sidebar">
    <?php dynamic_sidebar( 'blog_right_sidebar' ); ?>
  </div>
  <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="blog-container">
    <div class="blog-head">
      <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_date(); ?> | <?php the_author(); ?>
    </div>

    <?php if ( has_post_thumbnail() ) {?>
      <div class="blog-body">
        <div class="blog-column left">
          <?php the_post_thumbnail( 'thumbnail' ); ?>
        </div>
        <div class="blog-column right">
          <?php sprintf( "%s&hellip", the_excerpt() ); ?>
        </div>
      </div>

    <?php } else { ?>
      <div class="blog-body">
        <?php the_excerpt(); ?>
      </div>
    <?php } ?>
  </div>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
