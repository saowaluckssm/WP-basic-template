<?php get_header(); ?>

<div class="container">
  <div class="main">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post();?>
          <article class="post">
          <h3>
            <?php the_title(); ?>
          </h3>
          <div class="meta">
            Created By <?php the_author(); ?> on <?php the_time("F j, Y g:ia"); ?>
          </div>
          <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
          <br>
         
          </article>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo wpautop("Sorry, No post were found"); ?>
        <?php endif; ?>
        <?php comments_template(); ?>
    
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