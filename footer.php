<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cybervalue
 */

?>

<section class="sec-contact">
  <div class="l-inner">
    <h2 class="contact-ttl">CYBER &nbsp; VALUEに関して <br class="sp"> ご不明な点がございましたら <br>
      お気軽にお問い合わせ下さい</h2>
    <div class="contact-row">
      <div class="contact-blk contact-blk-sp">
        <div class="instruction-icon">
          <div class="instruction-icon-group">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/ico_email_circle.png" alt="メールでのお問い合わせはこちら">
          </div>
          <div class="instruction-txt-group">
            <p class="instruction-txt">メールでの <br class="sp"> お問い合わせはこちら</p>
          </div>
        </div>
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="cmn-contactbtn">お問い合わせ</a>
      </div>
      <div class="contact-blk contact-blk-sp">
        <div class="instruction-icon">
          <div class="instruction-icon-group">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/ico_document_circle.png" alt="資料請求はこちら">
          </div>
          <div class="instruction-txt-group">
            <p class="instruction-txt">資料請求はこちら</p>
          </div>
        </div>
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="cmn-contactbtn">資料請求</a>
      </div>
    </div>
  </div>
</section><!-- ./sec-contact -->
<div class="operating-company l-inner">
  <a href="<?php echo home_url('/'); ?>" class="company-logo">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_logo.png" alt="CYBER_VALUE">
  </a>
  <!--<h2 class="operating-ttl">運営会社</h2>
    <div class="operating-company-img">
        <div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_company01.png" alt="ISMSマーク" class="pc">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_company01_sp.png" alt="ISMSマーク" class="sp">
        </div>
        <div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_company02.png" alt="Pマーク" class="pc">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/img_company02_sp.png" alt="Pマーク" class="sp">
        </div>
    </div>-->
</div><!-- ./operating-company -->
<div id="chatbot-btn" class="chat-bot-btn">
  <a href="#" class="chat-bot">
    <div class="chat-icon">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/common/ico_chat.png" alt="ChatBot">
    </div>
    <p>チャットボットのサンプルです</p>
  </a>
</div><!-- ./chat-bot-btn -->
<footer>
  <div class="l-inner footer-blk">
    <?php wp_nav_menu(array('theme_location'=>'secondary'))?>
    <p class="copyright-txt">©2020 Roadmap inc.</p>
  </div>
</footer>
</div><!-- ./wrapper -->
<?php wp_footer(); ?>
</body>

</html>