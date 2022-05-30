<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cybervalue
 */

get_header();
?>
<section class="sec-mv top-mv">
  <div class="l-inner">
    <h2 class="mv-ttl">あらゆる悪意から会社を守り<br>企業価値を<span>最大化</span>する</h2>
    <div class="mv-btn">
      <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="mv-inquiry-btn">お問い合わせ</a>
      <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="mv-request-btn">資料請求</a>
    </div>
    <div class="growth-col">
      <div class="img-growth-rate">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_mv_no1.png" alt="成長率">
      </div>
      <p class="mv-txt">&#8251 1 2021年7月末時点で<br class="sp">昨対比187%成長</p>
    </div>
  </div>
  <div class="mv-persontxt-blk">
    <p class="mv-txt">CYBER VALUE 公式アンバサダー<br>ピアニスト＆ヴォーカリスト<br>森陽子</p>
    <div class="mv-person-img">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_person.png" alt="あらゆる悪意から会社を守り企業価値を最大化する">
    </div>
  </div>
</section><!-- ./sec-mv -->
<section class="sec-about l-inner">
  <div class="about-blk">
    <h2 class="toppg-ttl"><span class="sub-ttl">ABOUT</span><span class="align-ttl">CYBER VALUE</span>とは</h2>
    <p class="about-txt">『CYBER VALUE』とは株式会社ロードマップが提供する、<br class="pc">
      風評被害トラブル発生時の企業イメージ回復、ブランドの価値維持のためのトータルソリューションです。<br>
      インターネット掲示板に企業の悪評が流される事例はこれまでもありましたが、近年はSNSの普及で、<br class="pc">
      より多くの人が気軽に企業やサービスに対する意見や不満を投稿するようになり、<br class="pc">
      それが発端で炎上が発生することもしばしばあります。<br>
      ネット炎上は一日3件以上発生するといわれます。<br>
      企業に対する悪評が多くの人の目に入れば、真偽に関わらず企業イメージや売上、信頼の低下につながりかねません。<br>
      このようなリスクから企業を守り、運営にのみ注力していただけるよう、私たちが全力でサポートいたします。
    </p>
  </div>
</section><!-- ./sec-about -->
<section class="sec-reason">
  <div class="l-inner">
    <h2 class="toppg-ttl"><span class="sub-ttl">REASON</span><span class="align-ttl">CYBER VALUE</span>が<br class="sp">選ばれる理由
    </h2>
    <div class="reason-item-group">
      <div class="reason-item">
        <div class="reason-num">01</div>
        <div class="reason-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_reason01.png" alt="SEO対策の豊富な実績">
        </div>
        <h3 class="reason-ttl">SEO対策の豊富な実績</h3>
        <p class="reason-txt">株式会社ロードマップは2012年の創業以来、長きにわたりSEO対策をメ
          イン事業としており、その実績は累計 <span class="reason-redtxt">200件以上</span>。そのノウハウをもとに
          したMEO対策や逆SEO、風評被害対策に関しても豊富な実績がありま
          す。<br>
          長くSEO対策に携わり、つねに最新の情報を学び続けているからこそ、
          いまの検索サイトに最適な手法でネガティブな情報が表示されないよう
          に施策、ポジティブな情報を上位表示できます。
        </p>
      </div>
      <div class="reason-item">
        <div class="reason-num">02</div>
        <div class="reason-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_reason02.png" alt="事態収束から回復までワンストップ">
        </div>
        <h3 class="reason-ttl">事態収束から回復まで<br class="sp">ワンストップ</h3>
        <p class="reason-txt">株式会社ロードマップには、SEO対策やMEO対策などWebマーケティン
          グの幅広いノウハウをもつディレクター、高度な知識と技術が必要なフ
          ォレンジック対応・保守管理の可能なセキュリティエンジニアが在籍し
          ており、すべて自社で対応できます。<br>
          そのため下請けに丸投げせず、お客さまの情報伝達漏れや漏えいといっ
          たリスクも削減。よりリーズナブルな料金でサービスの提供を実現しま
          した。また、お客さまも複数の業者に依頼する手間が必要ありません。
        </p>
      </div>
      <div class="reason-item">
        <div class="reason-num">03</div>
        <div class="reason-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_reason03.png" alt="弁護士との連携による幅広いサービス">
        </div>
        <h3 class="reason-ttl">弁護士との連携による<br class="sp">幅広いサービス</h3>
        <p class="reason-txt">インターネット掲示板やSNSにおける誹謗中傷などの投稿は、運営に削
          除依頼を要請できます。しかし「規約違反にあたらない」などの理由で
          対応されないケースが非常に多いです。<br>
          削除依頼は通常、当事者か弁護士の要請のみ受け付けています。弁護士
          であれば仮処分の申し立てにより法的に削除依頼の要請ができるほか、
          発信者情報の開示請求により投稿者の個人情報を特定、損害賠償請求も
          可能です。
        </p>
      </div>
      <div class="reason-item">
        <div class="reason-num">04</div>
        <div class="reason-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_reason04.png" alt="セキュリティ面のリスクも解決">
        </div>
        <h3 class="reason-ttl">セキュリティ面のリスクも解決</h3>
        <p class="reason-txt">株式会社ロードマップは大手、官公庁サイトを含む脆弱性診断、サイバ
          ー攻撃からの復旧であるフォレンジック調査・対応の実績も累計<span class="reason-redtxt">400件</span>以
          上あります。<br>
          風評被害対策サービスを提供する企業はほかにもありますが、セキュリ
          ティ面を含めトータルに企業のブランド維持、リスク回避をおこなえる
          企業はありません。
        </p>
      </div>
    </div>
    <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="detail-btn">お問い合わせはこちら</a>
  </div>
</section><!-- ./sec-reason -->
<section class="sec-question">
  <div class="l-inner">
    <h2 class="toppg-ttl">こんなお悩みありませんか？</h2>
    <div class="question-blk">
      <div class="question-col">
        <div class="question-col-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/ico_firewall.png" alt="Firewall">
        </div>
        <p class="question-txt">検索サイトで自社の評判を下げるようなキーワードが出てくる</p>
      </div>
      <div class="question-col">
        <div class="question-col-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/ico_person_search.png" alt="Search">
        </div>
        <p class="question-txt">自社にどのような炎上・風評被害の潜在リスクがあるか整理できていない</p>
      </div>
      <div class="question-col">
        <div class="question-col-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/ico_firewall.png" alt="Firewall">
        </div>
        <p class="question-txt">セキュリティ専門家による定期チェックを実施しておらず、課題や必要予算が見えていない</p>
      </div>
    </div>
  </div>
</section><!-- ./sec-question -->
<section class="sec-service">
  <div class="l-inner">
    <h2 class="toppg-ttl"><span class="sub-ttl">SERVICE</span>サービス内容</h2>
    <h3 class="service-ttl">企業イメージの<br class="sp">回復・維持を総合サポート</h3>
    <div class="service-item">
      <div class="service-num">01</div>
      <div class="service-row">
        <div class="left-service-img">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service01.png" alt="問題の解決">
        </div>
        <div class="right-service-txt">
          <h4 class="service-item-ttl">問題の解決</h4>
          <p class="service-txt">企業イメージに大きく関わる、つぎのような問題をスピード解決いたします。</p>
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
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service02.png" alt="原因の究明・イメージ回復">
        </div>
        <div class="right-service-txt">
          <h4 class="service-item-ttl">原因の究明・イメージ回復</h4>
          <p class="service-txt">風評被害やトラブル発生の原因となったのはなにか、どこが炎上の発生源かを調査し、
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
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_service03.png" alt="価値の維持">
        </div>
        <div class="right-service-txt">
          <h4 class="service-item-ttl">価値の維持</h4>
          <p class="service-txt">風評被害、サイバー攻撃被害を受けてしまった企業さまに対し、
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
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/top/img_cyber_check01.png" alt="サイバーチェック">
        </div>
        <div class="right-service-txt">
          <h4 class="service-item-ttl">サイバーチェック</h4>
          <p class="service-txt">
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
    <a href="<?php echo get_permalink(get_page_by_path('service')) ?>" class="detail-btn">詳しくはこちら</a>
  </div>
</section><!-- ./sec-service -->
<section class="sec-works">
  <div class="l-inner">
    <h2 class="toppg-ttl"><span class="sub-ttl">WORKS</span>導入事例</h2>
    <div class="works-item-group">
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
  </div>
  <a href="<?php echo get_post_type_archive_link( 'works' ); ?>" class="detail-btn">詳しくはこちら</a>
  </div>
</section><!-- ./sec-works -->
<section class="sec-column">
  <div class="l-inner">
    <div class="left-column-item">
      <h2 class="toppg-ttl"><span class="sub-ttl">COLUMN</span>コラム</h2>
      <a href="<?php echo get_permalink(get_page_by_path('event-column')) ?>" class="column-btn detail-btn pc">一覧を見る</a>
    </div>
    <div class="right-column-item">
      <?php
      query_posts(array(
        'posts_per_page' => '3',
        'order' => 'DESC',
        'paged' => $paged,
        'category__not_in' => array(1)
      ));
      if (have_posts()) : ?>
      <?php while ( have_posts() ): the_post(); 
          $cat = get_the_category();
          $cat_id = $cat[0]->cat_ID;
          $cat_link = get_category_link($cat_id);
          $cat_name = $cat[0]->cat_name;
          $slug_name = $cat[0]->slug;
          ?>
      <a href="<?php the_permalink( ); ?>">
        <div class="column-item">
          <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'btheme_eyecatch_big'); ?>
          <?php if (has_post_thumbnail()) {
             echo '<div class="column-img" style="background: url(' . esc_url($featured_img_url) . ')no-repeat center;background-size: cover;">';
           } else {
             echo '<div class="column-img no-image">';
           } ?>
        </div>
      </a>
        <div class="column-txt">
          <a href="<?php the_permalink( ); ?>">
            <h3 class="column-item-ttl"><?php the_title(); ?></h3>
            <div class="desc pc"><?php the_content(); ?></div>
          </a>
          <p class="cat-name"><a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <a href="<?php echo get_permalink(get_page_by_path('event-column')) ?>" class="column-btn detail-btn sp">一覧を見る</a>
  </div>
  </div>
</section><!-- ./sec-column -->
<section class="sec-faq">
  <div class="l-inner">
    <h2 class="toppg-ttl"><span class="sub-ttl">Q&A</span>よくある質問</h2>
    <div class="faq-container">
      <div class="faq-head">
        <p><span class="faq-num">Q1</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>
      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
      <div class="faq-head">
        <p><span class="faq-num">Q2</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>
      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
      <div class="faq-head">
        <p><span class="faq-num">Q3</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>
      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
      <div class="faq-head">
        <p><span class="faq-num">Q4</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>
      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
      <div class="faq-head">
        <p><span class="faq-num">Q5</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>
      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
      <div class="faq-head">
        <p><span class="faq-num">Q6</span><span class="faq-question">テキストテキストテキストテキストテキストテキストテキストテキスト</span></p>
        <span class="plus-minus"></span>

      </div>
      <div class="faq-body">
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          テキストテキストテキストテキスト</p>
      </div>
    </div>
  </div>
</section><!-- ./sec-faq -->

<?php
get_footer();