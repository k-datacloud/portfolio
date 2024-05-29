<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body class="works body">
    <?php get_template_part('component/header-nav'); ?>
    <p class="open-anime">WORKS</p>

    <section class="sub-works">
        <div class="sub-works-inner">
            <h2 class="sub-works__title">WORKS</h2>
            <?php $args = array(
                'post_type' => 'works', // 既存の投稿タイプを指定
                'posts_per_page' => -1, // すべての投稿を取得
            );

            $works_query = new WP_Query($args); ?>

            <div class="sub-works-menu">
                <?php if ($works_query->have_posts()) :
                    while ($works_query->have_posts()) : $works_query->the_post(); ?>
                        <div class="works-wrap">
                            <div class="works-item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                                <div class="mask"></div>
                                <a class="works-item__link" href="<?php the_permalink(); ?>">View More</a>
                            </div>
                            <p class="works-item__title"><?php the_title(); ?></p>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>

                <?php else : ?>
                    <p>制作実績はありません。</p>

                <?php endif; ?>
            </div>


        </div>
        </div>
    </section>

    <?php get_template_part('component/contact') ?>


    <?php get_template_part('component/footer-nav') ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php get_footer(); ?>
</body>

</html>