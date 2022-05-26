<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komiya
 */

get_header();
/* Template Name: suggest */
?>

<section class="sec-mv service-suggest-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>サジェスト汚染対策</h2>
  </div>
</section><!-- ./sec-mv -->
<div class="content">
  <div id="service-detail-page" class="detail-suggest-page">
    <div class="tabs-service-nav">
      <ul class="tabs-service l-inner">
        <li><a href="#service-overview">サービス概要</a></li>
        <li><a href="#range-measure">対策可能範囲</a></li>
      </ul>
    </div><!-- ./tabs-service-nav -->
    <section class="service-detail-content l-inner">
      <div class="service-detail-row" id="service-overview">
        <h2 class="service-detail-ttl">サービス概要</h2>
        <p class="service-txt">Yahoo!やGoogleにおける関連キーワード・サジェストに、誹謗中傷などの汚染テキストが表示されてしまう場合、それらを表示されないように対策を実施するサービスです。
          ネガティブな関連キーワードが表示されており、事実と異なることが表示されることはしばしば散見されます。</p>
        <div class="suggestion-example-blk">
          <div class="suggestion-col">
            <p class="suggestion-col-txt">汚染の事例</p>
            <div class="suggestion-list">
              <p>・会社名 詐欺</p>
              <p>・会社名 悪徳</p>
              <p>・会社名 内紛</p>
              <p>・会社名 やらせ</p>
            </div>
          </div>
          <div class="suggest-arrow-ico">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/service-detail/ico_right_arrow.png" alt="right_arrow">
          </div>
          <div class="suggestion-col">
            <p class="suggestion-col-txt">対策後のサジェスト例</p>
            <div class="suggestion-list">
              <p>・会社名 評判</p>
              <p>・会社名 採用</p>
              <p>・会社名 株価</p>
              <p>・会社名 会社概要</p>
              <p>・会社名 住所</p>
            </div>
          </div>
        </div>
        <p class="suggestion-related-txt">ネガティブな関連キーワードは、放置しているだけではなかなか消えません。<br>
          独自のノウハウとシステムを駆使し、短期での成果を実現しながら、長期的に対策を講じてまいります。</p>
      </div>
      <div class="service-detail-row" id="range-measure">
        <h2 class="service-detail-ttl">対策可能範囲</h2>
        <div class="range-measure-list">
          <p>・Yahoo!関連キーワード・サジェスト（PC・SP）</p>
          <p>・Bing サジェスト</p>
          <p>・Bing 関連ワード</p>
          <p>・Youtube サジェスト（PC・SP）</p>
          <p>・Google サジェスト（PC・SP）</p>
          <p>Google 関連ワード（PC・SP）</p>
          <p>Google 他の人はこちらも検索（PC・SP）</p>
        </div>
      </div>
    </section><!-- ./service-detail-content -->
  </div><!-- #/service-detail-page -->
</div><!-- ./content -->
<?php 
get_footer() ?>