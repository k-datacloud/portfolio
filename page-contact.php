<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="contact-page body">
    <?php get_template_part('component/header-nav'); ?>

    <section class="contact-form">
        <h2 class="contact-form__title">Contact me</h2>
        <div class="contact-wrap">
            <p class="contact-form__text">
                お仕事のご相談やご依頼等はお気軽にお問い合わせください。<br>その他こんなことを一緒にやってみたい！など何でもお待ちしております。内容を確認させていただいた後、ご連絡させていただきます。</p>
            <?php echo do_shortcode('[contact-form-7 id="29b6eed" title="お問い合わせ"]'); ?>
        </div>
    </section>

    <?php get_template_part('component/contact'); ?>

    <?php get_template_part('component/footer-nav'); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php get_footer(); ?>
</body>

</html>