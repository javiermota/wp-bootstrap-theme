<?php get_header(); ?>

<div class="row">

  <div class="col-sm-9 col-md-8">
    <div class="blog-container">

      <?php if(have_posts()) : ?>
         <?php while(have_posts()) : the_post(); ?>

        <h2>
          <?php if(is_single()) : ?>
            <?php the_title(); ?>
          <?php else : ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <?php endif; ?>
        </h2>

        <?php the_content(); ?>

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