<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <?php if ( have_comments() ) : ?>

  <h3 class="comments-title">
    <span>
    <?php
      printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'zelus-by-osetin' ),
        number_format_i18n( get_comments_number() ), get_the_title() );
    ?>
    </span>
    <a href="#" class="read-comments-link"><i class="os-icon os-icon-eye-off"></i> <span><?php esc_html_e('Hide Comments', 'zelus-by-osetin') ?></span></a>
  </h3>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'zelus-by-osetin' ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'zelus-by-osetin' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'zelus-by-osetin' ) ); ?></div>
  </nav><!-- #comment-nav-above -->
  <?php endif; // Check for comment navigation. ?>

      <div class="comment-list">
          <?php wp_list_comments( array( 'style' => 'div', 'avatar_size' => 48 ) ); ?>
      </div>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
    <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'zelus-by-osetin' ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'zelus-by-osetin' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'zelus-by-osetin' ) ); ?></div>
  </nav><!-- #comment-nav-below -->
  <?php endif; // Check for comment navigation. ?>

  <?php if ( ! comments_open() ) : ?>
  <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'zelus-by-osetin' ); ?></p>
  <?php endif; ?>

  <?php endif; // have_comments() ?>

  <?php comment_form(array('comment_notes_after' => false, 'comment_notes_before' => false, 'title_reply' => esc_html__('Add Your Comment', 'zelus-by-osetin'))); ?>

</div><!-- #comments -->
