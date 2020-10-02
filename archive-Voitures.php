<?php get_header(); ?>

<div class="Voitures">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="voiture">
        <h1 class="title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h1>

        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br> 

        <div class="content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>