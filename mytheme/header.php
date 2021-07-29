<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ヘッダー開始 -->
<header class="myhead mycontainer">
<div class="alignwide">

<!-- ▼ サイト名・リンク表示 -->
<a href='<?php echo esc_url(home_url('/')); ?>'>
<?php bloginfo('name') ?>
</a>
<!-- ▼ サイト説明 -->
<p>
    <?php bloginfo('description') ?>
</p>
</div>
</header>
<!-- ヘッダー終わり -->

<!-- メニュー -->
<?php if(has_nav_menu('primary')): ?>
<nav class="mynav">
<div class="mycontainer">
<div class="alignwide">

<?php wp_nav_menu(array(
'theme_location' => 'primary',
)); ?>
</div>
</div>
</nav>
<?php endif; ?>
