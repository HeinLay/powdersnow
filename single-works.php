<?php 
get_header() ?>

<section class="sec-mv works-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">WORKS</span>導入事例</h2>
  </div>
</section><!-- /.sec-mv -->
<div class="content">
  <div id="works-detail-page">
    <section class="sec-works-detail l-inner">      
      <div class="works-detail-img">
        <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
      </div><!-- /.works-detail-img -->
      <div class="works-detail-txt">
        <h3 class="works-detail-ttl"><?php the_title(); ?></h3>
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
        <div>
          <?php the_content(); ?>
        </div>
      </div><!-- /.works-detail-txt -->
      <div class="single-pagination">
        <ul>
          <li><?php previous_post_link('%link','&#10229前の事例へ'); ?></li>
          <li><a href="<?php echo get_post_type_archive_link('works'); ?>">導入事例一覧へ</a></li>
          <li><?php next_post_link('%link','次の事例へ&#10230;'); ?></li>
        </ul>
      </div><!-- /.single-pagination -->
    </section><!-- /.sec-works-detail -->
  </div><!-- #/works-detail-page -->
</div><!-- /.content -->
<?php 
get_footer() ?>