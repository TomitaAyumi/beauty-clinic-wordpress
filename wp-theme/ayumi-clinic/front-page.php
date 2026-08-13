<?php get_header(); ?>
<main>
<section class="hero"><div class="hero-grid">
<div class="hero-copy">
<span class="eyebrow"><?php echo esc_html(ayumi_clinic_field('hero_eyebrow','BEAUTY & WELLNESS')); ?></span>
<h1><?php echo nl2br(esc_html(ayumi_clinic_field('hero_title',"Beauty,\nin your own way."))); ?></h1>
<p><?php echo esc_html(ayumi_clinic_field('hero_text','一人ひとりの悩みや希望に寄り添い、丁寧なカウンセリングを大切にする架空の美容クリニックです。')); ?></p>
<p><a class="btn fill" href="#menu">診療メニューを見る</a></p>
</div>
<div class="hero-media"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/hero.svg'); ?>" alt=""></div>
</div></section>

<section id="concept" class="section"><div class="wrapper concept-grid">
<div class="fade"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/concept.svg'); ?>" alt=""></div>
<div class="concept-copy fade"><div class="section-title" style="text-align:left"><span class="en">Concept</span><span class="ja">私たちが大切にしていること</span></div>
<h2><?php echo nl2br(esc_html(ayumi_clinic_field('concept_title',"自分らしい選択を、\n安心して考えられる場所へ。"))); ?></h2>
<p><?php echo esc_html(ayumi_clinic_field('concept_text','治療内容・費用・リスクについて事前に説明し、納得したうえで選択できる環境づくりを目指します。')); ?></p></div></div></section>

<section id="menu" class="section" style="background:var(--bg)"><div class="wrapper"><h2 class="section-title"><span class="en">Menu</span><span class="ja">診療メニュー</span></h2><div class="menu-grid">
<?php
$menus = array(
 array('img'=>'menu1.svg','label'=>'01 SKIN CARE','title'=>'肌管理メニュー','text'=>'肌状態を確認しながら、目的に合わせて施術を検討します。'),
 array('img'=>'menu2.svg','label'=>'02 INJECTION','title'=>'注入メニュー','text'=>'施術内容や注意事項を確認し、医師の診察を経てご案内します。'),
 array('img'=>'menu3.svg','label'=>'03 CONSULTATION','title'=>'カウンセリング','text'=>'初めての方にも分かりやすい説明を心がけています。')
);
foreach($menus as $m): ?>
<article class="card fade"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/'.$m['img']); ?>" alt=""><div class="card-body"><span class="label"><?php echo esc_html($m['label']); ?></span><h3><?php echo esc_html($m['title']); ?></h3><p><?php echo esc_html($m['text']); ?></p></div></article>
<?php endforeach; ?>
</div></div></section>

<section class="section"><div class="wrapper"><h2 class="section-title"><span class="en">Case</span><span class="ja">症例・施術事例</span></h2><div class="case-grid">
<?php $q=new WP_Query(array('post_type'=>'case','posts_per_page'=>3)); if($q->have_posts()): while($q->have_posts()):$q->the_post(); ?>
<a class="card fade" href="<?php the_permalink(); ?>">
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); else echo '<img src="'.esc_url(get_template_directory_uri().'/assets/img/case1.svg').'" alt="">'; ?>
<div class="card-body"><span class="label"><?php echo esc_html(get_the_terms(get_the_ID(),'case_category')[0]->name ?? 'CASE'); ?></span><h3><?php the_title(); ?></h3><p><?php echo esc_html(get_the_excerpt()); ?></p></div></a>
<?php endwhile; wp_reset_postdata(); else: ?>
<p>症例を登録すると、ここに最新3件が表示されます。</p>
<?php endif; ?>
</div><p style="text-align:center;margin-top:35px"><a class="btn" href="<?php echo esc_url(get_post_type_archive_link('case')); ?>">症例一覧を見る</a></p></div></section>

<section id="news" class="section" style="background:var(--bg)"><div class="wrapper"><h2 class="section-title"><span class="en">News</span><span class="ja">お知らせ</span></h2><ul class="news-list">
<?php $news=new WP_Query(array('post_type'=>'post','posts_per_page'=>3)); if($news->have_posts()): while($news->have_posts()):$news->the_post(); ?>
<li><time><?php echo esc_html(get_the_date('Y.m.d')); ?></time><span class="cat"><?php echo esc_html(get_the_category()[0]->name ?? 'INFO'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); else: ?><li><span>お知らせを登録すると表示されます。</span></li><?php endif; ?>
</ul></div></section>
</main>
<?php get_footer(); ?>