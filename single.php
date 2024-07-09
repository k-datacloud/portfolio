<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="body">
    <?php get_template_part('component/header-nav'); ?>

    <section class="post-page">
        <div class="post-page-inner">
            <div class="post-container"><?php the_content(); ?></div>
            <h2 class="post-page__title"><?php the_title(); ?></h2>
            <div class="detail">
                <div class="detail-item">
                    <h3 class="detail__title">OUTLINE</h3>
                    <?php $outline = get_post_meta(get_the_ID(), 'Outline', true); ?>
                    <p class="detail__text text-outline"><?php echo $outline; ?></p>
                </div>
                <div class="detail-item">
                    <h3 class="detail__title">Role</h3>
                    <?php $role = get_post_meta(get_the_ID(), 'Role', true); ?>
                    <p class="detail__text--en"><?php echo $role; ?></p>
                </div>
                <div class="detail-item">
                    <h3 class="detail__title">URL</h3>
                    <?php $URL = get_post_meta(get_the_ID(), 'URL', true); ?>
                    <?php if ($URL) : ?>
                    <p class="detail__text"><a class="detail__text--url" href="<?php echo $URL; ?>"
                            target="_blank"><?php echo $URL; ?></a></p>
                    <?php endif; ?>
                </div>
                <div class="detail-item">
                    <h3 class="detail__title">Github</h3>
                    <?php $Github = get_post_meta(get_the_ID(), 'Github', true); ?>
                    <?php if ($Github) : ?>
                    <p class="detail__text"><a class="detail__text--url" href="<?php echo $Github; ?>"
                            target="_blank"><?php echo $Github; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
            <p class="post-page__text"><a class="post-page__link"
                    href="<?php echo get_post_type_archive_link('works'); ?>">実績一覧に戻る</a></p>
        </div>
    </section>


    <?php get_template_part('component/contact') ?>

    <?php get_template_part('component/footer-nav') ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php get_footer(); ?>

</body>

</html>