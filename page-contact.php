<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="contact-page body">
    <?php get_template_part('component/header-nav'); ?>

    <section class="contact-form">
        <h2 class="contact-form__title">Contact me
        </h2>
        <p class="contact-form__text">
            ご質問やその他気になったことなどお気軽にご相談下さい。<br class="pc-br"> 内容を確認させていただいた後、ご連絡させていただきます。</p>
        <div class="contact-wrap">
            <!-- <div class="contactform-left">
                <p class="contactform-left__text">Let's talk together</p>
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="29b6eed" title="お問い合わせ"]'); ?>
        </div>
    </section>

    <?php get_template_part('component/contact'); ?>

    <?php get_template_part('component/footer-nav'); ?>


    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php get_footer(); ?>
</body>

</html>