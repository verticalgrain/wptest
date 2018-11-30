<article>

  <div class="post post--tease">

    <?php if ( has_post_thumbnail( ) ) { ?>
      <div class="post__thumbnail">
        <?php the_post_thumbnail( 'default' ); ?>
      </div>
    <?php } ?>

    <div class="post__content">
      
      <div class="post__date">
        <?php the_date(); ?>
      </div>

      <a class="post__title heading1" href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>

      <div class="post__content">
        <?php the_content(); ?>
      </div>

    </div><!-- .post__content -->

  </div><!-- .post -->

</article>