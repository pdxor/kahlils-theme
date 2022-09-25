<?php get_header(); ?>

  <main role="main" aria-label="Content">
    <section>
      <h1><?php _e('Latest posts', 'kahlils-theme'); ?> Hi there!</h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>
    </section>
  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
