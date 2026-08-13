<?php get_header(); ?><main><section class="page-hero"><h1>CASE DETAIL</h1><p>症例詳細</p></section><section class="section"><div class="wrapper single-wrap"><article class="single-main">
<div class="meta"><?php echo esc_html(get_the_terms(get_the_ID(),'case_category')[0]->name ?? 'CASE'); ?> / <?php echo esc_html(get_the_date('Y.m.d')); ?></div>
<h1><?php the_title(); ?></h1>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<div class="entry-content"><?php the_content(); ?></div>
<table class="info-table">
<tr><th>施術内容</th><td><?php echo esc_html(ayumi_clinic_field('treatment_name','デモ施術メニュー')); ?></td></tr>
<tr><th>費用</th><td><?php echo esc_html(ayumi_clinic_field('price','00,000円（税込）')); ?></td></tr>
<tr><th>治療回数</th><td><?php echo esc_html(ayumi_clinic_field('sessions','1回（例）')); ?></td></tr>
<tr><th>主なリスク・副作用</th><td><?php echo esc_html(ayumi_clinic_field('risk','赤み、腫れ、痛みなどが生じる場合があります（デモ表記）。')); ?></td></tr>
</table><p class="notice">※本テーマはポートフォリオ用です。症例情報は実在するものではありません。</p>
</article><aside><div class="sidebar-box"><h3>管理項目</h3><p>ACFまたはカスタムフィールドで、施術内容・費用・治療回数・リスク等を管理する想定です。</p></div></aside></div></section></main><?php get_footer(); ?>