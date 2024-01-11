<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="about-page body">

    <?php get_template_part('component/header-nav'); ?>

    <p class="open-anime">ABOUT</p>

    <section class="sub-about">
        <div class="sub-about-inner">
            <div class="profile">
                <div class="about-wrap">
                    <h3 class="profile__title">Career</h3>
                    <p class="profile__text">
                        My name is Sadatoki Kaisei. I was born in 2002 and live in Hyogo prefecture in Japan. I have
                        experienced many things since
                        graduating from high school. My motto is "to live happily in the
                        moment".
                    </p>
                    <p class="profile__text--ja"></p>
                    <h3 class="profile__title">Information</h3>
                    <p class="profile__text">
                        Inspired by a college student who was transmitting his programming studies on his blog, I
                        began to study on my own. I believe that my self-study has given me the ability to run and
                        research on my own. I am currently studying app development. In the future, I
                        would like to hone my skills as an engineer and create my own business. Although it is a big
                        hope, I am also interested in living and working abroad.
                    </p>
                </div>
            </div>
            <div class="skills">
                <h2 class="sub-about__title">Experienced in development</h2>
                <ul class="skills-menu">
                    <li class="skills__item"><img class="skills__img--reverse"
                            src="<?php echo get_template_directory_uri(); ?>/img/language-html5.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--float"
                            src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--reverse"
                            src="<?php echo get_template_directory_uri(); ?>/img/language-javascript.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--float"
                            src="<?php echo get_template_directory_uri(); ?>/img/vuejs.svg" alt=""></li>
                    <li class="skills__item"><img class="skills__img--reverse"
                            src="<?php echo get_template_directory_uri(); ?>/img/python-svgrepo-com.svg" alt=""></li>
                </ul>
            </div>
        </div>
        <img class="sub-about__img" src="<?php echo get_template_directory_uri(); ?>/img/a019.png" alt="">
    </section>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js ?>"></script>

    <?php get_footer(); ?>

</body>

</html>