<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="about-page body">

    <?php get_template_part('component/header-nav'); ?>

    <section class="sub-about">
        <!-- <h2 class="sub-about__title">About</h2>
        <div class="sub-about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ben-sweet-2LowviVHZ-E-unsplash.jpg" alt="">
        </div> -->
        <!-- <div class="about-wrap">
            <div class="profile">
                <h3 class="profile__title">Profile</h3>
                <table class="profile-table">
                    <tr>
                        <th class="profile-table__title">Name</th>
                        <td class="profile-table__text">Sadatoki Kaisei</td>
                    </tr>
                    <tr>
                        <th class="profile-table__title">Age</th>
                        <td class="profile-table__text--age">21</td>
                    </tr>
                    <tr>
                        <th class="profile-table__title">Place</th>
                        <td class="profile-table__text">Hyogo, Japan</td>
                    </tr>
                </table>
            </div>
        </div> -->
        <div class="sub-about-inner">
            <div class="profile">
                <div class="about-wrap">
                    <h3 class="profile__title">Career</h3>
                    <p class="profile__text">
                        My name is Sadatoki Kaisei. I was born in 2002 and live in Hyogo prefecture in Japan. I have
                        experienced many things since graduating from high school. My motto is "to live happily in the
                        moment". Inspired by a college student who was transmitting his programming studies on his blog,
                        I began to study on my own. I believe that my self-study has given me the ability to run and
                        research on my own. In the future, I would like to hone my skills as an engineer. Although it is
                        a big
                        hope, I am also interested in living and working abroad.
                    </p>
                    <p class="profile__text--ja">兵庫県在住の21歳、2002年生まれ。
                        高校卒業後はリゾートバイトなどさまざまな経験を積みました。大学生が発信していたブログに触発され、独学でプログラミングの勉強をスタート。主にWebサイトの構築やフロントエンド開発に取り組みました。
                        今は英語にちょっとハマっていて特に明確な理由はないけど勉強中。自分のペースで楽しみながら少しずつ取り組んでいます。「心が豊かで生きること」がモットーです。
                    </p>
                </div>
            </div>
            <div class="skills">
                <h2 class="skills-title" id="skills">Development</h2>
                <h3 class="skills__title">Frontend</h3>
                <p class="skills__text">
                    開発経験がある言語はHTML、CSS、JavaScript。主にウェブサイトやWebアプリでの実装経験あり。HTMLやCSSは基本的なコードであれば調べなくても記述可能できます。CSSはSassを用いた記述やBEMなどの命名規則に準じた記述も可能。JSに関しては調べながらであれば開発やコードの記述も可能。
                    フレームワークはVueを使った経験があり、VueとVuetifyを用いたWebアプリケーションの開発経験あり。
                </p>
                <h3 class="skills__title">Backend</h3>
                <p class="skills__text">
                    WordPressを使用したウェブサイトの開発や、PythonのDjangoを使用したアプリの開発経験があります。WordPressはオリジナルテーマでの開発経験あり。Pythonは開発歴は一番浅いですが、とても書きやすく面白くて好きです。
                </p>
                <ul class="skills-menu">
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/language-html5.svg" alt="ロゴ"></li>
                    <li class="skills__item"><img class="skills__img--float" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.svg" alt="ロゴ"></li>
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/language-javascript.svg" alt="ロゴ"></li>
                    <li class="skills__item"><img class="skills__img--float" src="<?php echo get_template_directory_uri(); ?>/img/vuejs.svg" alt="ロゴ"></li>
                    <li class="skills__item"><img class="skills__img--reverse" src="<?php echo get_template_directory_uri(); ?>/img/python-svgrepo-com.svg" alt="ロゴ"></li>
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