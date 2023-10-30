<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="about-page">

    <?php get_template_part('component/header-nav'); ?>

    <section class="sub-about">
        <div class="sub-about-inner">
            <div class="profile">
                <h2 class="sub-about__title">ABOUT</h2>
                <div class="about-wrap">
                    <h3 class="profile__name">定時海聖 <span class="profile__name--en">Sadatoki Kaisei</span></h3>
                    <p class="profile__text">
                        2002年生まれの20才で兵庫県在住。ブログでプログラミングの勉強を発信していた大学生に感化され2022年の12月から勉強を開始。現在はアプリケーション開発やマーケティングについて勉強中。"自分らしく今を楽しく生きる"がモットー。
                    </p>
                </div>
            </div>
            <div class="skills">
                <h2 class="sub-about__title">Skills</h2>
                <ul class="skills-menu">
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/language-html5.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--float" src="<?php echo get_template_directory_uri(); ?>/img/sass.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/language-javascript.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--float" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/vuejs.svg" alt=""></li>
                </ul>
            </div>
        </div>
        <img class="sub-about__img" src="<?php echo get_template_directory_uri(); ?>/img/a019.png" alt="">
    </section>

    <?php get_footer(); ?>

</body>

</html>