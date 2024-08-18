<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="about-page body">

    <?php get_template_part('component/header-nav'); ?>

    <section class="about-mv">
        <h2 class="about-mv__title">About me</h2>
        <p class="about-mv__text">私について
            <img class="arrow-img" width="70"
                src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-svgrepo-com.svg" alt="">
        </p>
    </section>

    <div class="space"></div>

    <section class="about">
        <div class="resume">
            <p class="resume__text">
                <span class="resume__text--en">Overview</span>
            </p>
        </div>
        <div class="about-inner">
            <div class="profile">
                <h3 class="profile__title">Who I am</h3>
                <div class="profile__text">
                    <p class="profile__text--ja">兵庫県在住の21歳、2002年生まれ。高校卒業後はリゾートバイトなど様々なことを経験。
                        趣味はNBA（バスケットボール）を見ることと、なんとなく興味を持って始めてから今も継続している英語です。健康第一。
                    </p>
                    <p class="profile__text--en">
                        I was born in 2002 and raised in Hyogo, Japan. I have
                        experienced many things since graduating from high school.
                        My hobby is to watch a game of basketball. also I have been learning English since I was
                        intersted in
                        it which is somehow interesting. Health is the most important things for life.
                    </p>
                </div>
            </div>
            <div class="profile">
                <h3 class="profile__title">Experience</h3>
                <div class="profile__text">
                    <p class="profile__text--ja">
                        始めはHTMLやCSSを使ったWebサイトの構築から始めました。その後JavaScriptを書いたりWordPress構築、また興味本位で簡単な
                        Webアプリ作成なども取り組みました。個人で仕事を受注させていただいた経験もいくつかあります。
                    </p>
                    <p class="profile__text--en">
                        I started to built Website using HTML and CSS. afterwards, I coded in JavaScript builted
                        WordPress. also I also explored creating simple web applications out of personal interest.
                        Additionally, I have some experience
                        working independently and took on several projects.
                    </p>
                </div>

            </div>
            <div class="profile">
                <h3 class="profile__title">Others</h3>
                <div class="profile__text">
                    <p class="profile__text--ja">
                        実は絶対にエンジニアになりたい！とは思っていません。出来心ではじめて隙間時間に作業するうちに出来ることが増えたので続けただけです。上に書いた英語も面白そうだから始めたらなんとなく今も続いているだけです。なりたいものは現状特にありませんが、見つけるためにも色んなことを経験したいと思っています。
                    </p>
                    <p class="profile__text--en">Actually, I don't think I definitely want to be an software engineer. I
                        just have continued because I started for my interests. As I did it in my spare time,
                        things I could do were increasing. English is as well. At present, I don't have a specific
                        career goal in mind; instead, I want to gain diverse experiences to explore what I really want
                        to do.
                    </p>
                </div>
            </div>
        </div>
        <div class="skills">
            <ul class="skills-menu">
                <li class="skills__item"><img class="skills__img--reverse"
                        src="<?php echo get_template_directory_uri(); ?>/img/language-html5.svg" alt="ロゴ"></li>
                <li class="skills__item"><img class="skills__img--float"
                        src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt="ロゴ"></li>
                <li class="skills__item"><img class="skills__img--reverse"
                        src="<?php echo get_template_directory_uri(); ?>/img/language-javascript.svg" alt="ロゴ"></li>
                <li class="skills__item"><img class="skills__img--float"
                        src="<?php echo get_template_directory_uri(); ?>/img/vuejs.svg" alt="ロゴ"></li>
                <li class="skills__item"><img class="skills__img--reverse"
                        src="<?php echo get_template_directory_uri(); ?>/img/python-svgrepo-com.svg" alt="ロゴ"></li>
            </ul>
        </div>
        </div>
    </section>

    <?php get_template_part('component/contact'); ?>

    <?php get_template_part('component/footer-nav'); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js ?>"></script>

    <?php get_footer(); ?>

</body>

</html>