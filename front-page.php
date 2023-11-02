<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body class="frontbody">
    <?php get_template_part('component/header-nav'); ?>

    <section class="mainvisual">
        <h2 class="mainvisual__title--dummy"></h2>
        <div class="mainvisual-inner">
            <h2 class="mainvisual__title">自分らしく、<br>&nbsp;&nbsp;&nbsp;今を生きる</h2>
            <img class="mainvisual__img"
                src="<?php echo get_template_directory_uri(); ?>/img/64d451fe6eae71b4f2431d27_Pacheco.svg" alt="">
        </div>
        <div class="scroll-item">
            <img class="mainvisual__subimg" src="<?php echo get_template_directory_uri(); ?>/img/mouse-svgrepo-com.svg"
                alt="">
            <p class="mainvisual__text">scroll</p>
        </div>
    </section>

    <section class="concept">
        <h2 class="concept__title">CONCEPT</h2>
        <p class="concept__text">
            僕のサイトを見ていただきありがとうございます。<br>"正解はないが選択はある"日々色んな事を選択して生きていますが<br>正解を創るかどうかは自分次第だと思っています。<br>選んだ道を後悔なく自分らしく正解にするべく自分らしく生活したいと思っています。
        </p>
        <p class="concept-link"><a class="concept-link__item" href="<?php echo get_permalink(7); ?>">View More</a></p>
    </section>

    <section id="service" class="service">
        <h2 class="service__title">SERVICE</h2>
        <div class="service-wrap">
            <div class="service-wrap__item">
                <img class="service__img" src="<?php echo get_template_directory_uri(); ?>/img/code-svgrepo-com.svg"
                    alt="">
                <h3 class="service__name">Coding</h3>
                <p class="service__text">
                    HTMLファイルでのコーディングやアニメーションのほかCMSの導入に対応いたします。コーディング作業ではレスポンシブデザイン、およびSEOに配慮した制作を提供いたします。</p>
            </div>
            <div class="service-wrap__item">
                <img class="service__img"
                    src="<?php echo get_template_directory_uri(); ?>/img/marketing-optimization-page-svgrepo-com.svg"
                    alt="">
                <h3 class="service__name">Web Creation</h3>
                <p class="service__text">
                    ヒアリングを通じてデザインの制作から対応させていただきます。一般的なウェブサイト制作はもちろんShopifyを用いたECサイトの制作まで対応させていただきます。
                </p>
            </div>
            <div class="service-wrap__item">
                <img class="service__img"
                    src="<?php echo get_template_directory_uri(); ?>/img/configuration-consumer-content-svgrepo-com.svg"
                    alt="">
                <h3 class="service__name">Management</h3>
                <p class="service__text">制作後の運用としてアクセス解析やリニューアルなどウェブサイトの最適化を目指します。また、UXの向上提案やコンテンツ管理もサポートさせていただきます。</p>
            </div>
        </div>
    </section>

    <section id="works" class="works">
        <div class="works-wrap">
            <div class="works-textcontent">
                <h2 class="works__title">WORKS</h2>
                <p class="works__text">
                    私の制作実績はこちらでご覧いただけます。WordPressでのサイト制作からコーディングまで、幅広い実績を掲載しております。お仕事のご依頼前にぜひご参考にしてください。</p>
                <a class="works__link" href="<?php echo home_url('/works'); ?>">View More</a>
            </div>
            <div class="works-img">
                <div class="works-img__mask"></div>
                <img class="works-img__item"
                    src="<?php echo get_template_directory_uri(); ?>/img/quaritsch-photography-bKOfm4KNt64-unsplash.jpg"
                    alt="">
            </div>
        </div>
    </section>

    <?php get_template_part('component/footer-nav') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <?php get_footer(); ?>

</body>

</html>