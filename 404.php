<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <article id="post-404">
      <h1><?php esc_html_e('Page not found', 'kahlils-theme'); ?></h1>
      <h2>
        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Return home?', 'kahlils-theme'); ?></a>
      </h2>
    </article>
  </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
