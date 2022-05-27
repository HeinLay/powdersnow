<?php
/**
* The template for displaying Category
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package cybervalue
*/

get_header();
/* Template Name: Event And Column */
?>

<section class="sec-mv column-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">EVENT & COLUMN</span>イベント・コラム</h2>
  </div>
</section><!-- ./sec-mv -->
<div class="content">
  <div id="events-column-page">
    <div class="column-tabs">
      <div class="column-tabs-header">
        <ul id="column-tabs-nav" class="l-inner news-tabs">
          <li class="active">
            <a href="<?php echo get_permalink( get_page_by_path( 'event-column' ) ) ?>#column-tabs-nav">イベント・コラム一覧</a>
          </li>
          <li <?php if(is_category('column')) {?>class="active" <?php } ?>>
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'コラム' )) ); ?>#column-tabs-nav">コラム</a>
          </li>
          <li <?php if(is_category('burning')) {?>class="active" <?php } ?>>
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '炎上事例レポート' )) ); ?>#column-tabs-nav">炎上事例レポート</a>
          </li>
          <li <?php if(is_category('survey')) {?>class="active" <?php } ?>>
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '調査結果レポート' )) ); ?>#column-tabs-nav">調査結果レポート</a>
          </li>
        </ul>
      </div><!-- ./column-tabs-header -->
      <div id="all" class="column-tab-content">
        <div class="column-item-row l-inner">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          query_posts(array(
            'posts_per_page' => '10',
            'order' => 'DESC',
            'paged' => $paged,
            'category__not_in' => array(1)
          ));
          if (have_posts()) : ?>
          <?php while ( have_posts() ): the_post(); 
              $cat = get_the_category();
              $cat_name = $cat[0]->cat_name;
              $slug_name = $cat[0]->slug;
              ?>
          <div class="column-item">
            <a href="<?php the_permalink( ); ?>">
              <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'btheme_eyecatch_big'); ?>
              <?php if (has_post_thumbnail()) {
                    echo '<div class="column-item-img" style="background: url(' . esc_url($featured_img_url) . ')no-repeat center;background-size: cover;">';
                  } else {
                    echo '<div class="column-item-img no-image">';
                  } ?>
          </div>
          <h3 class="column-item-ttl"><?php the_title(); ?></h3>
          <div class="desc"><?php the_content(); ?></div>
          </a>
          <div class="cat-name">
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( $cat_name )) ); ?>#column-tabs-nav"><?php echo $cat_name; ?></a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php the_posts_pagination(array(
          'prev_text' => '&#10229; PREV',
          'next_text' => 'NEXT &#10230;',
        )); ?>
      <?php wp_reset_query(); ?>
    </div><!-- ./column-tabs -->
  </div><!-- #/events-column-page -->
</div><!-- ./content -->


<?php
  get_footer();