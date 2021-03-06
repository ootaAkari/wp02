<!-- ▼ top読み込み -->
<?php get_header(); ?>

<?php if(have_posts()):
    while(have_posts()): 
    the_post(); ?>

<article <?php post_class('mycontainer'); ?>>

<!-- タイトル&投稿日 -->
<div class="myposthead">
<!-- ▼ 記事のカテゴリをリストで表示 -->
<?php the_category(); ?>
<h1><?php the_title(); ?></h1>

<!-- ▼ timeで日付情報をマークアップ -->
<time datatime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
<!-- ▼ 記事投稿日取得しHTMLに適した形に出力する-->
<?php echo esc_html(get_the_date());  ?></time>
</div>

<!-- ▼ 記事本文 -->
<?php the_content(); ?>

<!-- ▼ 前後の記事リンクを表示 -->
<?php the_post_navigation(); ?>

</article>

<?php endwhile; endif; ?>

<!-- ▼sidebar読み込み -->
<?php get_sidebar(); ?>

<!-- ▼bottom読み込み -->
<?php get_footer(); ?>
