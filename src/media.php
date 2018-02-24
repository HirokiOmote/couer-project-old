<?php
get_header();
// Template Name: メディア
?>

<main class="media">
  <header class="header">
    <h1>
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/media/ttl_header@pc.svg">
        <source media="(min-width: 320px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/media/ttl_header@sp.svg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages/media/ttl_header@pc.svg" alt="メディア">
      </picture>
    </h1>
  </header>

  <?php if ( have_rows('media') ): while ( have_rows('media') ): the_row(); ?>
    <section class="section-media">
      <header>
        <p><?php the_sub_field('title_en'); ?></p>
        <h2><?php the_sub_field('title'); ?></h2>
      </header>

      <?php
        $images = get_sub_field('gallery');
        $column = get_sub_field('column');
        $column = $column['value'];
        if ( $images && $column == 8 ):
      ?>
        <ul class="gallery-8column">
          <?php foreach( $images as $image ): ?>
            <li>
              <a href="<?php echo $image['description']; ?>">
                <figure>
                  <img src="<?php echo $image['sizes']['media_thumbnail_8column']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <figcaption><?php echo $image['caption']; ?></figcaption>
                </figure>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php elseif ( $images && $column == 5 ): ?>
        <ul class="gallery-5column">
          <?php foreach( $images as $image ): ?>
            <li>
              <a href="<?php echo $image['description']; ?>">
                <figure>
                  <img src="<?php echo $image['sizes']['media_thumbnail_5column']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <figcaption><?php echo $image['caption']; ?></figcaption>
                </figure>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </section>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
