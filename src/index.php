<?php
get_header();
?>

<main class="post-wrap">
  <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
      <article class="post">
        <header>
          <h1><?php the_title(); ?></h1>
          <p><time datetime="the_time('Y-m-d');"><?php the_time('Y.m.d'); ?></time></p>
        </header>

        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php wp_pagination(); ?>
    </div>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
