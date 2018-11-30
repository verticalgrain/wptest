<?php get_header(); ?>

  <div class="container">

    <section>

      <?php
        if ( have_posts() ) :

          echo '<h1 class="heading1">Search Results</h1>';

          while ( have_posts() ) : the_post();

            get_template_part('templates/post-tease','');
            
          endwhile;

        else : 

          echo "Sorry, couldnt find any matches for your search";

        endif;
      ?>
    
    </section>
    
  </div><!-- .container -->
  
<?php get_footer(); ?>