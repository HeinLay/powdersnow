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
                <li><a href="#survey-axis">期待できる効果</a></li>
                <li><a href="#cyber-value">CYBAR VALUEが選ばれる理由</a></li>
            </ul>
        </div><!-- ./tabs-service-nav -->
        <section class="service-detail-content l-inner">
            <div class="service-detail-row">
                <h2 class="service-detail-ttl" id="service-overview">サービス概要</h2>
                <p class="service-txt">Web上に存在する数え切れないほどの「声」を整理し、貴社にご報告すべき適切な情報を抽出します。専門家による目視調査とリスクランクの制定を実施し、報告いたします。<br>
                数千から数万件ほどのローデータ（Web上に混在する情報）を収集し、弊社独自のチェックツールと専門家による目視検証を実施し、それらを分類したうえで、定められた規定に
                従ってご報告します。リスクランクは高・中・小の3つに分類され、情報を交通整理します。</p>
            </div>
            <div class="service-detail-row">
                <h2 class="service-detail-ttl" id="survey-axis">調査の軸</h2>
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
                        
                    </div>
                </div>
            </div>
            <div class="service-detail-row">
                <h2 class="service-detail-ttl" id="service-overview">CYBER VALUE が選ばれる理由</h2>
                <p class="service-txt">Web上に存在する数え切れないほどの「声」を整理し、貴社にご報告すべき適切な情報を抽出します。専門家による目視調査とリスクランクの制定を実施し、報告いたします。<br>
                数千から数万件ほどのローデータ（Web上に混在する情報）を収集し、弊社独自のチェックツールと専門家による目視検証を実施し、それらを分類したうえで、定められた規定に
                従ってご報告します。リスクランクは高・中・小の3つに分類され、情報を交通整理します。</p>
            </div>
        </section><!-- ./service-detail-content -->
    </div><!-- #/service-detail-page -->
</div><!-- ./content -->
<?php 
get_footer() ?>