<?php get_header(); ?>

<main class="container mx-auto py-10 px-4 grid md:grid-cols-3 gap-8">
  <section class="md:col-span-2 space-y-6">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <article class="bg-white p-6 shadow rounded">
        <h2 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="text-sm text-gray-600"><?php the_date(); ?> | <?php the_author(); ?></p>
        <div class="mt-2"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; endif; ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
