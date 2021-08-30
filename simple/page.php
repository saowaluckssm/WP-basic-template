<?php get_header(); ?>

<div class="container">
  <div class="main">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post();?>
          <article class="post">
          <h3>
            
            <?php the_title(); ?>
          
          </h3>
        
          <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

          <?php the_content(); ?>
          
          </article>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo wpautop("Sorry, No post were found"); ?>
        <?php endif; ?>
    
  </div>
  <div class="sidebar">
    <?php 
      if(is_active_sidebar("sidebar")) :
        dynamic_sidebar("sidebar");

      endif;
    ?>
  </div>
  <div class="clr"></div>
</div>
<?php get_footer(); ?>