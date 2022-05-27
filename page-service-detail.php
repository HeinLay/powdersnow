<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komiya
 */

get_header();
/* Template Name: service-detail */
?>
<?php if (is_page('web-sns')) : ?>
  <section class="sec-mv service-web-mv">
    <div class="l-inner">
      <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>Web/SNSモニタリング</h2>
    </div>
  </section><!-- ./sec-mv -->
  <div class="tabs-service-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#survey-axis">調査の軸</a></li>
        <li><a href="#cyber-value">CYBAR VALUEが選ばれる理由</a></li>
      </ul>
  </div><!-- ./tabs-service-nav -->
<?php elseif (is_page('rumors')) : ?>
  <section class="sec-mv service-rumors-mv">
    <div class="l-inner">
      <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>風評被害対策</h2>
    </div>
  </section><!-- ./sec-mv -->
  <div class="tabs-service-nav tabs-rumors-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#cyber-value">CYBAR VALUEが選ばれる理由</a></li>
      </ul>
  </div><!-- ./tabs-service-nav -->
<?php elseif (is_page('security')) : ?>
  <section class="sec-mv service-security-mv">
    <div class="l-inner">
      <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>セキュリティ診断・<br class="sp">対策</h2>
    </div>
  </section><!-- ./sec-mv -->
  <div class="tabs-service-nav tabs-security-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#security-diagnosis">セキュリティ診断<br>実施のメリット</a></li>
        <li><a href="#cyber-value">CYBER VALUEが<br>選ばれる理由</a></li>
        <li><a href="#ideal-company">こんなお悩みのある<br>企業様に最適です</a></li>
        <li><a href="#diagnosis-summary">診断概要</a></li>
        <li><a href="#report-example">レポートの例</a></li>
      </ul>
  </div><!-- ./tabs-service-nav -->
<?php elseif (is_page('forensic')) : ?>
  <section class="sec-mv service-forensic-mv">
    <div class="l-inner">
      <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>フォレンジック調査・<br class="sp">対応</h2>
    </div>
  </section><!-- ./sec-mv -->
  <div class="tabs-service-nav tabs-forensic-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#symptom-immediately">このような症状が思い当たる方は<br>すぐにご連絡をください</a></li>
        <li><a href="#cyber-value">CYBER VALUEが<br>選ばれる理由</a></li>
      </ul>
  </div><!-- ./tabs-service-nav -->
<?php elseif (is_page('suggest')) : ?>       
  <section class="sec-mv service-suggest-mv">
    <div class="l-inner">
      <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>サジェスト汚染対策</h2>
    </div>
  </section><!-- ./sec-mv -->
  <div class="tabs-service-nav tabs-suggest-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#range-measure">対策可能範囲</a></li>
      </ul>
  </div><!-- ./tabs-service-nav -->
<?php endif;  ?>

<?php the_content() ?>

<?php 
get_footer(); ?>