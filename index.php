<?php get_header(); ?>

<div class="row">

  <div class="col-sm-9 col-md-8">
    <div class="blog-container">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

          <div class="post-item">
            <h2 class="post-title">
              <?php if(is_single()) : ?>
                <?php the_title(); ?>
              <?php else : ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php endif; ?>
            </h2>

            <?php the_post_thumbnail(null, array('class'  => "img-responsive post-img")); ?>
            <p class="post-date"><?php the_time('M d, Y'); ?></p>
            <p><a href="" class="post-comments"><?php comments_number() ?></a></p>
            <?php the_content(); ?>
          </div>

         <?php endwhile; ?>

      <?php else : ?>

    <div class="alert alert-info">
      <strong>No content in this loop</strong>
    </div>

    <?php endif; ?>

    </div>
  </div>

  <div class="col-sm-3 col-md-offset-1 right-sidebar">

  <?php
   if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : //  Sidebar name
  ?>



    <?php
         endif;
    ?>

  </div>

</div>




<?php get_footer(); ?>