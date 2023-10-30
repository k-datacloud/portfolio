<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('component/header-nav'); ?>

    <section class="post-page">
        <div class="post-page-inner">
            <div class="post-container"><?php the_content(); ?></div>
            <h2 class="post-page__title"><?php the_title(); ?></h2>
            <div class="outline">
                <h3 class="outline__title">Outline</h3>
                <?php $outline = get_post_meta(get_the_ID(), 'Outline', true); ?>
                <p class="outline__text"><?php echo $outline; ?></p>
            </div>
            <p class="post-page__text"><a class="post-page__link" href="<?php echo get_post_type_archive_link('works'); ?>">実績一覧に戻る</a></p>
        </div>
    </section>


    <?php get_template_part('component/contact') ?>

    <?php get_template_part('component/footer-nav') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <?php get_footer(); ?>

</body>

</html>