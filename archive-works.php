<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cybervalue
 */

get_header();
?>

<section class="sec-mv works-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">WORKS</span>導入事例</h2>
  </div>
</section><!-- ./sec-mv -->
<div class="content">
  <div id="works-page">
    <section class="sec-works">
      <div class="l-inner">
        <?php if (have_posts()) : ?>
        <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('posts_per_page=8&post_type=works&order=DESC&paged='. $paged);
                ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink( ); ?>" class="works-item-row">
          <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'btheme_eyecatch_big'); ?>
          <?php if (has_post_thumbnail()) {
									echo '<div class="left-works-img" style="background: url(' . esc_url($featured_img_url) . ')no-repeat center;background-size: cover;">';
								} else {
									echo '<div class="left-works-img no-image">';
								} ?>
      </div><!-- ./l-inner -->
      <div class="right-works-txt">
        <h3 class="works-item-ttl"><?php the_title(); ?></h3>
        <?php
                        if(get_field('work_description')){
                        echo '<div class="works-item-txt">
                        '.get_field('work_description').'
                        </div>';
                        }
                        ?>
        <div class="works-list-group">
          <div class="works-list"><span>業種</span>
            <p><?php the_field('industry'); ?></p>
          </div>
          <div class="works-list"><span>従業員数</span>
            <p><?php the_field('employees'); ?></p>
          </div>
          <div class="works-list"><span>対策範囲</span>
            <p><?php the_field('range'); ?></p>
          </div>
        </div>
      </div><!-- ./right-works-txt -->
      </a>
      <?php endwhile; ?>
      <?php the_posts_pagination(array(
                'prev_text' => '&#10229; PREV',
                'next_text' => 'NEXT &#10230;',
                )); ?>
      <?php wp_reset_query(); ?>
      <?php endif; ?>
  </section><!-- ./sec-works -->
  </div><!-- #/works-page -->
</div><!-- ./content -->
<?php
get_footer();