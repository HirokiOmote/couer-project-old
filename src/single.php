<?php get_header(); ?>

<?php the_post(); ?>

<main class="single-wrap">
  <article>
    <header>
      <h1><?php the_title(); ?></h1>
      <p><time datetime="the_time('Y-m-d');"><?php the_time('Y.m.d'); ?></time></p>
    </header>

    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>

  <div class="single-pagination">
    <?php
      $next_post = get_next_post();
      if (!empty( $next_post )):
    ?>
      <a class="next" href="<?php echo get_permalink( $next_post->ID ); ?>">次の記事へ</a>
    <?php endif; ?>

    <?php
      $previous_post = get_previous_post();
      if (!empty( $previous_post )):
    ?>
      <a class="prev" href="<?php echo get_permalink( $previous_post->ID ); ?>">前の記事へ</a>
    <?php endif; ?>
  </div>
</main>

<?php wp_pagination(); ?>

<?php get_footer(); ?>
