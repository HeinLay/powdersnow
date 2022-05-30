<?php
/**
* The template for displaying Category
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package cybervalue
*/

get_header();
/* Template Name: Contact Form */
?>

<section class="sec-mv contact-mv">
  <div class="l-inner">
    <h2 class="mv-ttl"><span class="mvsub-ttl">CONTACT</span>お問い合わせ・<br class="sp">ご相談フォーム</h2>
  </div>
</section><!-- ./sec-mv -->

<div class="content">
  <div id="contact-page">
    <section class="sec-contact-form l-inner">
      <?php echo do_shortcode( '[contact-form-7 id="32" title="Contact form"]' ); ?>
    </section><!-- ./sec-contact-form -->
  </div><!-- #/contact-page -->
</div><!-- ./content -->
<?php get_footer(); ?>