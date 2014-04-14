<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'flat' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>
    <?php if ( empty( flat_get_theme_option('archive_metadata') ) ) : ?>
      <div class="entry-meta"><?php flat_entry_meta(); ?></div>
    <?php endif; ?>
  </header>
  <?php if ( has_post_thumbnail() && ! post_password_required() && empty(flat_get_theme_option('archive_featured_image') ) ) : ?>
    <div class="entry-thumbnail"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'flat' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
  <?php endif; ?>
  <?php if ( is_search() || (!empty(flat_get_theme_option('archive_content'))) ) : ?>
  <div class="entry-summary"><?php the_excerpt(); ?></div>
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading', 'flat' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'flat' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
  </div>
  <?php endif; ?>
</article>