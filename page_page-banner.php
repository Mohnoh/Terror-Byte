<?php /* Template Name: Page with Banner */ ?>
<?php get_header(); ?>
<div class="page-container">
  <?php if ( has_post_thumbnail() ) { ?>
  <div class="page-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
  <?php } else { ?>
  <div class="page-header" style="background-image: url('<?php echo get_template_directory_uri().'/res/default-page-header-image.jpeg';?>');">
  <?php } ?>
    <div class="page-header-banner">
      <?php if (!empty(get_post_meta($post->ID, 'Page Header Title', true))) { ?>
        <h1><?php echo get_post_meta($post->ID, 'Page Header Title', true); ?></h1>
      <?php } else { ?>
        <p>
          Create custom fields "Page Header Title" and "Banner Icon" to change title and icon
          (Icons are from Font Awesome, fill value with the class value)
        </p>
      <?php } ?>
      <?php if (!empty(get_post_meta($post->ID, 'Banner Icon', true))) { ?>
        <i class="<?php echo get_post_meta($post->ID, 'Banner Icon', true); ?>" style="font-size:96px;color:white;"></i>
      <?php } else { ?>
        <i class="fa fa-cog" style="font-size:96px;color:white;"></i>
      <?php } ?>
    </div>
  </div>
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="page-body">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
    endwhile; endif; ?>
  </div>
</div>
<?php get_footer(); ?>
