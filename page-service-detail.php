<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komiya
 */

get_header();
/* Template Name: Service Detail */
?>

<section class="sec-mv service-mv">
    <div class="l-inner">
        <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>問題の解決</h2>
    </div>
</section><!-- ./sec-mv -->
<div class="content">
    <div id="service-detail-page">
        <div class="tabs-service-nav">
            <ul class="tabs-service l-inner">
                <li><a href="#service-overview">サービス概要</a></li>
                <li><a href="#expected-effect">期待できる効果</a></li>
                <li><a href="#cyber-value">CYBAR VALUEが選ばれる理由</a></li>
            </ul>
        </div><!-- ./tabs-service-nav -->
        <section class="service-detail-content l-inner">
            <div class="service-detail-row">
                <div class="left-service-detail">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service.png"
                        alt="画像が入ります">
                </div>
                <div class="right-service-detail">
                    <h3 class="service-detail-ttl" id="service-overview">サービス概要<span class="underline-txt"></span></h3>
                    <p>企業イメージに大きく関わる、つぎのような問題をスピード解決いたします。</p>
                    <p class="service-txt">検索サイトのサジェストにネガティブなキーワードが出るようになってしまった</p>
                    <p class="service-list">サジェスト削除（Yahoo!・Google・Bing）</p>
                    <p class="service-list">逆SEO</p>

                    <p class="service-txt">インターネット掲示板やSNSの投稿などで風評被害を受けた</p>
                    <p class="service-list">弁護士連携による削除依頼・開示請求</p>

                    <p class="service-txt">サイバー攻撃を受けてサーバーがダウンした、サイト改ざんを受けてしまった</p>
                    <p class="service-list">フォレンジック調査＋対応</p>

                </div>
            </div>
            <div class="service-detail-row">
                <div class="left-service-detail">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service.png"
                        alt="画像が入ります">
                </div>
                <div class="right-service-detail">
                    <h3 class="service-detail-ttl" id="expected-effect">課題の詳細<span class="underline-txt"></span>
                    </h3>
                    <p>
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        <br>
                        テキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
            <div class="service-detail-row">
                <div class="left-service-detail">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service.png"
                        alt="画像が入ります">
                </div>
                <div class="right-service-detail">
                    <h3 class="service-detail-ttl">期待できる効果<span class="underline-txt"></span></h3>
                    <p>
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        <br>
                        テキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
            <div class="service-detail-row">
                <div class="left-service-detail">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service/img_service.png"
                        alt="画像が入ります">
                </div>
                <div class="right-service-detail">
                    <h3 class="service-detail-ttl" id="cyber-value">CYBAR VALUEが選ばれる理由<span
                            class="underline-txt"></span></h3>
                    <p>
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        <br>
                        テキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </div>
        </section><!-- ./service-detail-content -->
    </div><!-- #/service-detail-page -->
</div><!-- ./content -->
<?php 
get_footer() ?>