<!-- メニュー -->
<aside class="mymenu">
<!-- 幅広にする -->
<div class="mycontainer">
<div class="alignwide mymenu-columns">

<!-- プロフィール -->
<section class="myprofile">
<h2>PROFILE</h2>
<figure>
<img src="<?php echo esc_url(get_theme_file_uri('profile.jpg')); ?>" alt="">
</figure>
<strong>
<?php the_author_meta('display_name'); ?>
<p><?php the_author_meta('description'); ?></p>
</strong>
</section>


<!-- ウィジェットエリア出力 -->
<?php if (is_active_sidebar('sidebar-1')): ?>
<?php dynamic_sidebar('sidebar-1') ?>
<?php endif; ?>
</div>
</div>
</aside>