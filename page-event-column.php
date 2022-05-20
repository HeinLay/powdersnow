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

<!-- =============== content ============== -->
<div class="content">
    <div id="events-column-page">
        <section class="sec-mv">
            <div class="l-inner">
                <h2 class="mv-ttl"><span class="mvsub-ttl">EVENT & COLUMN</span>イベント・コラム</h2>
            </div>
        </section><!-- ./sec-mv -->
        <div class="column-tabs">
            <div class="column-tabs-header">
                <ul id="column-tabs-nav" class="l-inner">
                    <li data-href="#all"><span>イベント・コラム一覧</span></li>
                    <li data-href="#column"><span>コラム</span></li>
                    <li data-href="#burning"><span>炎上事例レポート</span></li>
                    <li data-href="#survey"><span>調査結果レポート</span></li>
                </ul>
            </div>
            <div id="all" class="column-tab-content">
                <div class="column-item-row contents l-inner">
                    <?php
                   $the_query = new WP_Query( array(
    'paged' => $paged,
    'posts_per_page' => -1,
    'category__not_in' => array(1),
    'order' => 'DESC'
) );
 
if ($the_query->have_posts()) :?><?php
   while ($the_query->have_posts()) : $the_query->the_post();
                    $cat = get_the_category();
                    $cat_name = $cat[0]->cat_name;
                    $slug_name = $cat[0]->slug;
                    ?>
                    <div class="column-item">
                        <div class="column-item-img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
                            <?php else : ?>
                            <img src="<?php print get_template_directory_uri(); ?>/assets/images/event_column/img_events01.png"
                                alt="Image">
                            <?php endif; ?>
                        </div>
                        <h3 class="column-item-ttl"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <div class="cat-name">
                            <a href="#<?php echo $slug_name; ?>"><?php echo $cat_name; ?></a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php
      $args = array(
       'hide_empty' => 1,
       'exclude' => array(1)
     );
     $categories = get_categories( $args );?>
            <?php  foreach ($categories as $category) : ?>
            <?php 
      $cat_slug = $category->slug; 
      $cat_name = $category->name; 
      ?>
            <div id="<?php echo $cat_slug ?>" class="column-tab-content">
                <div class="column-item-row contents l-inner">
                    <?php if (have_posts()) : ?>
                    <?php
            query_posts('category_name='.$cat_slug.'&posts_per_page=10&order=DESC&paged='.$paged);
            ?>
                    <?php while ( have_posts() ): the_post(); 
              ?>
                    <div class="column-item">
                        <div class="column-item-img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
                            <?php else : ?>
                            <img src="<?php print get_template_directory_uri(); ?>/assets/images/event_column/img_events01.png"
                                alt="Image">
                            <?php endif; ?>
                        </div>
                        <h3 class="column-item-ttl"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <div class="cat-name">
                            <span data-href="#<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div><!-- #/events-column-page -->
    </div>
    <!-- ./content -->

    <?php
get_footer();