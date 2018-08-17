<?php get_header(); ?>
<main id="main">
  <div class="container">
    <article>
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content(); 
          }
        }
        else{
          echo '<p>Sorry, nothing was found.';
        }
      ?>
    </article>
  </div>
</main>
<?php get_footer(); ?>