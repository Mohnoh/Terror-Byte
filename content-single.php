<!-- Content when viewing a single blog post -->
<div class="post-container">
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-honor"><?php the_author(); ?> | <?php the_date(); ?></div>
  <?php the_content(); ?>
</div>
