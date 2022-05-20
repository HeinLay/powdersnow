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
        <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>問題の解決</h2>
    </div>
</section><!-- ./sec-mv -->
<div class="content">
    <div id="service-page">
        <section class="sec-service">
            <div class="l-inner">
                <h3 class="service-ttl">企業イメージの回復・維持を総合サポート</h3>
                <div class="service-item">
                    <div class="service-num">01</div>
                    <div class="service-row">
                        <div class="left-service-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service01.png"
                                alt="問題の解決">
                        </div>
                        <div class="right-service-txt">
                            <h4 class="service-item-ttl">問題の解決</h4>
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
                </div>
                <div class="service-item">
                    <div class="service-num">02</div>
                    <div class="service-row">
                        <div class="left-service-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service02.png"
                                alt="原因の究明・イメージ回復">
                        </div>
                        <div class="right-service-txt">
                            <h4 class="service-item-ttl">原因の究明・イメージ回復</h4>
                            <p>風評被害やトラブル発生の原因となったのはなにか、どこが炎上の発生源かを調査し、
                                イメージ回復のためにもっとも最適な施策を検討、実施します。
                            </p>
                            <p class="service-txt">企業やサイトの評判を底上げする施策</p>
                            <p class="service-list">SEO対策（コンテンツマーケティング）</p>
                            <p class="service-list">MEO対策</p>
                            <p class="service-list">サジェスト最適化戦略支援</p>
                            <p class="service-txt">セキュリティ面のリスク調査</p>
                            <p class="service-list">ホームページ健康診断</p>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-num">03</div>
                    <div class="service-row">
                        <div class="left-service-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service03.png"
                                alt="価値の維持">
                        </div>
                        <div class="right-service-txt">
                            <h4 class="service-item-ttl">価値の維持</h4>
                            <p>風評被害、サイバー攻撃被害を受けてしまった企業さまに対し、
                                つぎのような施策で価値の維持までトータルでサポートいたします。</p>
                            <p class="service-list">セキュリティ運用</p>
                            <p class="service-list">保守管理（月一度の検査ほか）</p>
                            <p class="service-list">バックグラウンド調査</p>
                        </div>
                    </div>
                </div>
                <h3 class="service-ttl">リスク対策を多角的にサポート</h3>
                <div class="service-item">
                    <div class="service-row">
                        <div class="left-service-img">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_cyber_check01.png"
                                alt="サイバーチェック">
                        </div>
                        <div class="right-service-txt">
                            <h4 class="service-item-ttl">サイバーチェック</h4>
                            <p>
                                取引先や採用の応募者の素性を調査し、取引・採用前に素行に問題のない
                                人物であるか確認しておける、現代のネット信用調査サービスです。</p>
                            <p class="service-list">反社チェック</p>
                            <p>
                                ネット記事情報をもとに犯罪・不祥事・反社関連の情報を収集します。
                                採用・取引の最低限のリスク管理に。</p>
                            <p class="service-list">ネットチェック</p>
                            <p>SNS・掲示板・ブログなどから会社・人に関する情報を収集。
                                企業体質・人物健全度のリスクを可視化します。</p>
                            <p class="service-list">TRUST CHECK</p>
                            <p>匿名アカウント、ダークWebすべてのサイバー空間を網羅ネットの
                                深部まで調べあげる、究極のリスク対策支援ツールです。</p>
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
    </div>
    </section><!-- ./sec-works -->
</div><!-- #/service-page -->
</div><!-- ./content -->
<?php
get_footer();