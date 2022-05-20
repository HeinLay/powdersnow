<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cybervalue
 */

get_header();
?>
<section class="sec-mv error-mv">
            <div class="l-inner">
                <h2 class="mv-ttl"><span class="mvsub-ttl">404 NOT FOUND</span>お探しのページは見つかりませんでした</h2>
            </div>
</section><!-- ./sec-mv -->
  <div class="content">
    <div id="error-page">
      <div class="l-inner">
        <p class="error-txt">  申し訳ございませんが、お探しのページが見つかりませんでした。<br>
            お探しのページは削除されたか、URLが変更された可能性がございます。</p>
          <a href="<?php echo home_url('/'); ?>" class="back-btn">TOPへ戻る</a>
      </div>
    </div>
	</div><!--content-->

<?php
get_footer();
