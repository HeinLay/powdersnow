<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package cybervalue
*/

get_header();
?>
<?php $category = get_the_category($post->ID);
$cat_id = $category[0]->cat_ID;
$cat_slug = $category[0]->slug;
$cat_name = $category[0]->name;
$category_link = get_category_link($cat_id); ?>
<section class="sec-mv column-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">EVENT & COLUMN</span>イベント・コラム</h2>
  </div>
</section><!-- ./sec-mv -->
<div class="content">
  <div id="events-column-detail-page">
    <section class="events-column-detail">
      <div class="l-inner">
        <div class="events-detail-img">
          <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
          <a href="<?php echo $category_link; ?>" class="events-detail-btn"><?php echo $cat_name; ?></a>
        </div><!-- ./events-detail-img -->
        <h3 class="event-detail-ttl"><?php the_title(); ?></h3>
          <?php the_content(); ?>
        <div class="single-pagination">
          <ul>
            <li><?php previous_post_link('%link','&#10229前の事例へ'); ?></li>
            <li><a href="<?php echo get_post_type_archive_link('works'); ?>">コラム一覧へ</a></li>
            <li><?php next_post_link('%link','次の事例へ&#10230;'); ?></li>
          </ul>
        </div><!-- ./single-pagination -->
      </div>
    </section><!-- ./events-column-detail -->
  </div><!-- #/events-column-detail-page -->
</div><!-- content -->

<?php
get_footer();