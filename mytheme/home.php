<!-- ▼ top読み込み -->
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="mycontainer">
<!-- 幅広記事 -->
<div class="alignwide">


<!-- タイトル・サブタイトル -->
<div class="myposthead">
<h1>最新情報</h1>
<p>RECENT</p>
</div>

<!-- 記事を囲んで2列にするdiv -->
<div class="mypostlist">
<?php if(have_posts()):
while(have_posts()): 
the_post(); ?>

<article <?php post_class(); ?>>

<!-- ▼記事のリンク設定 -->
<a href="<?php the_permalink(); ?>">
<!-- ▼アイキャッチ画像表示 -->
<?php if(has_post_thumbnail()); ?>
<figure>
    <?php the_post_thumbnail(); ?>
</figure>
<h2><?php the_title(); ?></h2>
</a>

</article>
<?php endwhile; endif; ?>
</div>

<!-- ▼ページネーション -->
<?php the_posts_pagination( array(
'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-arrow-right-alt2"></span>'
) ); ?>

</div>
</main>
<!-- ▼sidebar.php -->
<?php get_sidebar(); ?>
<!-- ▼bottom読み込み -->
<?php get_footer(); ?>
