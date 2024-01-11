<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="contact-page body">
    <?php get_template_part('component/header-nav'); ?>

    <p class="open-anime">CONTACT</p>

    <section class="contact-form">
        <div class="contact-wrap">
            <h2 class="contact-form__title">CONTACT</h2>
            <p class="contact-form__text"></p>
            <?php echo do_shortcode('[contact-form-7 id="29b6eed" title="お問い合わせ"]'); ?>
        </div>
    </section>

    <?php get_template_part('component/contact'); ?>

    <?php get_template_part('component/footer-nav'); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php get_footer(); ?>
</body>

</html>