<?php
/**
 * The template for displaying Category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package komiya
 */

get_header();
/* Template Name: web */
?>

<section class="sec-mv service-web-mv">
    <div class="l-inner">
        <h2 class="mv-ttl"><span class="mvsub-ttl">SERVICE</span>問題の解決</h2>
    </div>
</section><!-- ./sec-mv -->
<div class="content">
    <div id="service-detail-page">
        <div class="tabs-service-nav">
            <ul class="tabs-service l-inner">
                <li><a href="#service-overview">サービス概要</a></li>
                <li><a href="#survey-axis">調査の軸</a></li>
                <li><a href="#cyber-value">CYBAR VALUEが選ばれる理由</a></li>
            </ul>
        </div><!-- ./tabs-service-nav -->
        <section class="service-detail-content l-inner">
            <div class="service-detail-row" id="service-overview">
                <h2 class="service-detail-ttl">サービス概要</h2>
                <p class="service-txt">Web上に存在する数え切れないほどの「声」を整理し、貴社にご報告すべき適切な情報を抽出します。専門家による目視調査とリスクランクの制定を実施し、報告いたします。<br>
                数千から数万件ほどのローデータ（Web上に混在する情報）を収集し、弊社独自のチェックツールと専門家による目視検証を実施し、それらを分類したうえで、定められた規定に
                従ってご報告します。リスクランクは高・中・小の3つに分類され、情報を交通整理します。</p>
            </div>
            <div class="service-detail-row" id="survey-axis">
                <h2 class="service-detail-ttl">調査の軸</h2>
                <div class="factors-row">
                    <div class="factors-item">
                        <p class="detail-list-txt">① 内部要因</p>
                        <div class="circle-row">
                            <p class="circle-txt">情報漏洩</p>
                            <p class="circle-txt">内部告発</p>
                        </div>
                        <p>従業員による内部的な情報と捉えられる「リスク投稿」の監視を実施します</p>
                    </div>
                    <div class="factors-item">
                        <p class="detail-list-txt"> ② 外部要因 </p>
                        <div class="circle-row">
                            <p class="circle-txt">風評被害</p>
                            <p class="circle-txt">クレーム</p>
                        </div>
                        <p>根拠のない風評や、お客様からのクレームを収集します調査の軸は大きく上記2点であり、
                            それぞれの視点において調査を実施します</p>
                    </div>
                </div>
            </div>
            <div class="service-detail-row" id="cyber-value">
                <h2 class="service-detail-ttl">CYBER VALUE が選ばれる理由</h2>
                <dl class="reason-chosen-list">
                    <dt class="detail-list-txt">① 長年のWebマーケティング企業が運営</dt>
                        <dd>検索エンジンとセキュリティ診断の調査能力をかけあわせた独自の技術</dd>
                        <dd>様々な監視案件に対応可能、過去10年間のノウハウ・実績が詰まった運用体制をご提供</dd>
                </dl>
                <dl class="reason-chosen-list">
                    <dt class="detail-list-txt">② 目視による投稿監視</dt>
                        <dd>システムだけでは捉えきれない、ソーシャルメディアのハイコンテキストで難しいニュアンスにも人力で対応。テキストだけでなく画像に含まれるリスクも判定します。</dd>
                        <dd>「特定のキーワードを含んでいる場合に炎上認定する」ではなく、言葉のニュアンスにより炎上を事前に検知</dd>
                </dl>
                <fieldset class="roadmap-survey">
                    <legend>ロードマップの調査方法における大きなメリットとしては2点。
                        <br>『文章ニュアンスでの検知』と『投稿画像の検知』となっております。</legend>
                        <dl class="reason-chosen-list">
                            <dt class="detail-list-txt">① 投稿文章のニュアンスから危険性を察知する事が出来る</dt>
                            <dd>ツール等にある、事前に高リスクKWをセットしておき、検知する方法を実施すると、新しい事例には対応が出来なくなる。<br>
                            且つ、リスク判定がされない可能性が高い。</dd>
                        </dl>
                        <dl class="reason-chosen-list">
                            <dt class="detail-list-txt">② 検知した写真の内容を目視で見る事による判断が可能</dt>
                            <dd>日本国内で精度の良い「画像判定」が出来る監視ツールは存在しなく、目視判定が重要である（&#8251監視業界知見より）</dd>
                        </dl>
                </fieldset>
                <dl class="reason-chosen-list">
                    <dt class="detail-list-txt">③ リスクランクの制定とクイックな緊急連絡</dt>
                        <dd>事前に基準書を作成し、何が貴社にとってリスクとなり得るかをすり合わせ</dd>
                        <dd>監視地点において、問題のある投稿を発見した際には、電話＆メールで緊急連絡</dd>
                </dl>
                <p class="media-monitoring">&#8658; 万全のソーシャルメディア監視体制を整え、貴社リスクとなり得る投稿内容をいち早くご報告いたします</p>
                <div class="emergency-contact-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/service-detail/img_emergency_contact.png" alt="万全のソーシャルメディア監視体制を整え、貴社リスクとなり得る投稿内容をいち早くご報告いたします">
                </div>
            </div>
        </section><!-- ./service-detail-content -->
    </div><!-- #/service-detail-page -->
</div><!-- ./content -->
<?php 
get_footer() ?>