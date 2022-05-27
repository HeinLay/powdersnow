<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komiya
 */

get_header();
/* Template Name: Service */
?>

<section class="sec-mv service-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>サービス</h2>
  </div>
</section><!-- ./sec-mv -->
<div class="content">
  <div id="service-page">
    <section class="sec-service">
      <div class="l-inner">
        <h3 class="service-ttl">企業イメージの<br class="sp">回復・維持を総合サポート</h3>
        <div class="service-item">
          <div class="service-num">01</div>
          <div class="service-row">
            <div class="left-service-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service01.png" alt="Web/SNSモニタリング">
            </div>
            <div class="right-service-txt">
              <h4 class="service-item-ttl">Web/SNSモニタリング</h4>
              <p class="service-txt">Web上に存在する数え切れないほどの「声」を整理し、貴社にご報告すべき適切な情報
                を抽出します。専門家による目視調査とリスクランクの制定を実施し、報告いたします。
                数千から数万件ほどのローデータ（Web上に混在する情報）を収集し、弊社独自のチェ
                ックツールと専門家による目視検証を実施し、それらを分類したうえで、定められた規
                定に従ってご報告します。リスクランクは高・中・小の3つに分類され、情報を交通整理
                します。</p>
              <div class="service-detail-btn">
                <a href="<?php bloginfo('url'); ?>/web-sns/" class="detail-btn">詳しくはこちら</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-item">
          <div class="service-num">02</div>
          <div class="service-row">
            <div class="left-service-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service02.png" alt="風評被害対策">
            </div>
            <div class="right-service-txt">
              <h4 class="service-item-ttl">風評被害対策</h4>
              <p class="service-txt">会社名やサービス名、個人名などの「指定キーワード」をYahoo!やGoogleで検索した
                ときに表示されるネガティブなサイトを見えにくくするサービスです。検索結果にネガ
                ティブなキーワードが表示されてしまうと、それだけでユーザーは悪い印象を受け、ビ
                ジネスに大きな悪影響を与えかねません。<br>
                （ネガティブなキーワードの例：「社名 不祥事」「社名 ブラック」「社名 裁判」「社
                名 反社」など）
              </p>
              <div class="service-detail-btn">
                <a href="<?php bloginfo('url'); ?>/rumors/" class="detail-btn">詳しくはこちら</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-item">
          <div class="service-num">03</div>
          <div class="service-row">
            <div class="left-service-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service03.png" alt="セキュリティ診断・対策">
            </div>
            <div class="right-service-txt">
              <h4 class="service-item-ttl">セキュリティ診断・対策</h4>
              <p class="service-txt">セキュリティ対策の第一歩という位置づけで、対象となるホームページの脆弱性を認識
                していただくためのサービスです。診断結果は、セキュリティ対策方針の検討材料とし
                てのご活用を想定しています。<br>
                自社ホームページがサイバー攻撃を受け、改ざんなどされれば情報漏えいや、利用者に
                ウイルスをばら撒く加害者になり兼ねません。このような被害を防ぐのに有効なのが、
                脆弱性診断です。</p>
              <div class="service-detail-btn">
                <a href="<?php bloginfo('url'); ?>/security/" class="detail-btn">詳しくはこちら</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-item">
          <div class="service-num">04</div>
          <div class="service-row">
            <div class="left-service-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service04.png" alt="フォレンジック調査・対応">
            </div>
            <div class="right-service-txt">
              <h4 class="service-item-ttl">フォレンジック調査・対応</h4>
              <p class="service-txt">
                ホームページがサイバー攻撃により改ざんされた、サーバーがダウンした、といったセ
                キュリティ事故時にセキュリティエンジニアが攻撃箇所の修復、セキュリティ対策措置
                など緊急対応を実施するサービスです。
                どのように侵入されたのか、情報流出したのか、していないのか、まだ攻撃は続いてい
                るのか、早急に調査・対策します。</p>
              <div class="service-detail-btn">
                <a href="<?php bloginfo('url'); ?>/forensic/" class="detail-btn">詳しくはこちら</a>
              </div>
            </div>
          </div>
        </div>
        <div class="service-item">
          <div class="service-num">05</div>
          <div class="service-row">
            <div class="left-service-img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service05.png" alt="サジェスト汚染対策">
            </div>
            <div class="right-service-txt">
              <h4 class="service-item-ttl">サジェスト汚染対策</h4>
              <p class="service-txt">
                Yahoo!やGoogleにおける関連キーワード・サジェストに、誹謗中傷などの汚染テキス
                トが表示されてしまう場合、それらを表示されないように対策を実施するサービスで
                す。<br>
                ネガティブな関連キーワードが表示されており、事実と異なることが表示されることは
                しばしば散見されます。</p>
              <div class="service-detail-btn">
                <a href="<?php bloginfo('url'); ?>/suggest/" class="detail-btn">詳しくはこちら</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- ./sec-service -->
    <section class="sec-works">
      <div class="l-inner">
        <h2 class="toppg-ttl"><span class="sub-ttl">WORKS</span>導入事例</h2>
        <ul class="works-item-group works-slider">
          <?php if (have_posts()) : ?>
          <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('posts_per_page=6&post_type=works&order=DESC&paged='. $paged);
        ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <a href="<?php the_permalink( ); ?>" class="works-item">
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'btheme_eyecatch_big'); ?>
            <?php if (has_post_thumbnail()) {
             echo '<div class="works-img" style="background: url(' . esc_url($featured_img_url) . ')no-repeat center;background-size: cover;">';
           } else {
             echo '<div class="works-img no-image">';
           } ?>
      </div>
      <h4 class="works-ttl"><?php the_title(); ?></h4>
      <?php
         if(get_field('work_description')){
         echo '<div class="works-txt">
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
      </a>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
      <?php endif; ?>
      </ul>
      <a href="#" class="detail-btn">詳しくはこちら</a>
    </section><!-- ./sec-works -->
  </div><!-- #/service-page -->
</div><!-- ./content -->
<?php
get_footer();