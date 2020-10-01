<?php get_header(); ?>

<div class="salles">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="projet">
        <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br> 
        <h1 class="title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>