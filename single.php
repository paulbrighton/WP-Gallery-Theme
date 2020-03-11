<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="post">
      <p class="meta">
        Posted at <?php the_time(); ?> on <?php the_date(); ?> by <?php the_author(); ?>
      </p>
      <hr>
      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
          <?php
          $attr     = array(
            'class'     =>    'w3-animate-right'
          );
          ?>
          <?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
        </div>
      <?php endif; ?>

      <div class="w3-row">
        <div class="w3-col l2">
          <br>
          <a href="<?php echo site_url(); ?>" class="w3-btn w3-red">Go Back</a>
        </div>
        <div class="w3-col l10">
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </article>
  <?php endwhile; ?>

<?php else : ?>
  <?php echo wpautop('Sorry, there are no posts at the moment.'); ?>
<?php endif; ?>

<?php get_footer(); ?>