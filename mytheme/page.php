<!-- ▼ top読み込み -->
<?php get_header(); ?>

<?php if(have_posts()):
    while(have_posts()): 
    the_post(); ?>

<article <?php post_class('mycontainer'); ?>>

<!-- タイトル&投稿日 -->
<div class="myposthead">
<h1><?php the_title(); ?></h1>
<p>
<?php echo esc_html(strtoupper(get_post_field('post_name'))); ?>
</p>
</div>

<!-- ▼ 記事本文 -->
<?php the_content(); ?>

</article>

<?php endwhile; endif; ?>

<!-- ▼sidebar読み込み -->
<?php get_sidebar(); ?>

<!-- ▼bottom読み込み -->
<?php get_footer(); ?>
