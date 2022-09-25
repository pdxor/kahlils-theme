<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
        <h1>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <span class="date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?> <?php the_time(); ?>
          </time>
        </span>
        <span class="author"><?php esc_html_e('Post by', 'kahlils-theme' ); ?> <?php the_author_posts_link(); ?></span>
        <span class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'kahlils-theme'), __('1 Comment', 'kahlils-theme'), __('% Comments', 'kahlils-theme')); ?></span>
        <?php the_content(); ?>
        <?php the_tags(__('Tags: ', 'kahlils-theme' ), ', ', '<br>');?>
        <p><?php esc_html_e('Category: ', 'kahlils-theme'); the_category(', '); ?></p>
        <p><?php esc_html_e('Post written by ', 'kahlils-theme'); the_author(); ?></p>
        <?php comments_template(); ?>
      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <article>
        <h1><?php esc_html_e( 'Sorry, nothing to display.', 'kahlils-theme' ); ?></h1>
      </article>
    <?php endif; ?>
  </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
