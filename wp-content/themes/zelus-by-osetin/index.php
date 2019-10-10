<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
<div class="os-container">
  <div class="blog-content-w">
    <div class="blog-content">
      <?php if ( have_posts() ) { ?>
        <div class="blog-index" data-columns="">
          <?php
            while ( have_posts() ) : the_post();
              get_template_part('content');
            endwhile;
          ?>
        </div>
        <div class="index-navigation">
          <?php 
          the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'zelus-by-osetin' ),
            'next_text'          => __( 'Next page', 'zelus-by-osetin' )
          ) ); 
          ?>
        </div>
      <?php
      }else{ ?>
        <div class="not-found-page-w search-results">
          <h1 class="page-title"><?php _e('No results for your search', 'zelus-by-osetin') ?></h1>
          <h5 class="page-content-sub-title"><?php _e('Try searching for a different keyword...', 'zelus-by-osetin'); ?></h5>
          <div class="post-content">
            <?php echo '<div class="page-intro-text">'.__('If you\'re not happy with the results, please do another search', 'zelus-by-osetin').'</div>'; ?>
            <div class="search-404">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div> <?php
      } ?>
    </div>
    <div class="blog-sidebar">
      <?php
      if ( is_active_sidebar( 'sidebar-index' ) ){
        dynamic_sidebar( 'sidebar-index' );
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
