<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="contact-page">
    <?php get_template_part('component/header-nav'); ?>

    <section class="contact-form">
        <div class="contact-wrap">
            <h2 class="contact-form__title">CONTACT</h2>
            <p class="contact-form__text">お見積もりは無料です！お仕事に関することや協業のご相談のほか「こんなことをやってみたら面白そう」などお気軽にご連絡下さい。</p>
            <?php echo do_shortcode('[contact-form-7 id="29b6eed" title="お問い合わせ"]'); ?>
        </div>
    </section>

    <?php get_template_part('component/footer-nav'); ?>

    <?php get_footer(); ?>
</body>

</html>