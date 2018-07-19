<?php get_header(); ?>

<main class="event">
  <header class="header">
    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post/category-event/ttl_header.svg" alt="イベント"></h1>
  </header>

  <section class="wrapper">
    <header>
      <p>EVENT INFORMATION</p>
      <h2>イベント情報</h2>
    </header>

    <?php if ( have_posts() ): ?>
      <div class="post-wrap-event">
        <?php while ( have_posts() ): the_post(); ?>
          <a class="post-event" href="<?php the_permalink(); ?>">
            <section>
              <div class="image">
                <?php the_post_thumbnail('topics_thumbnail'); ?>
              </div>
              <h3><?php the_title(); ?></h3>
              <p><time datetime="the_time('Y-m-d');"><?php the_time('Y.m.d'); ?></time></p>
            </section>
          </a>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="none-post">現在、投稿はありません。</p>
    <?php endif; ?>
  </section>

  <div class="pagination">
    <?php wp_pagination(); ?>
  </div>
</main>

<?php get_footer(); ?>
