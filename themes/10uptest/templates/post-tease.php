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

      <a class="post__title heading1" href="<?php echo get_the_permalink(); ?>" aria-label="<?php the_title(); ?>" title="<?php the_title(); ?>" >
        <?php the_title(); ?>
      </a>

      <div class="post__excerpt">
        <?php the_excerpt(); ?>
      </div>

      <a class="post__readmore" href="<?php echo get_the_permalink(); ?>" aria-label="<?php the_title(); ?>" title="<?php the_title(); ?>">
        Read More</a>

    </div><!-- .post__content -->

  </div><!-- .post -->

</article>