<?php get_header(); ?>

  <div class="container">
  
    <section> 

      <?php
        if ( have_posts() ) :

          while ( have_posts() ) : the_post();

            get_template_part('templates/post-tease','');
            
          endwhile;

        endif;

      ?>

    </section>
   
  </div><!-- .container -->
   
<?php get_footer(); ?>