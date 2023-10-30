<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('component/header-nav'); ?>

    <section class="sub-works">
        <div class="sub-works-inner">
            <h2 class="sub-works__title">WORKS</h2>
            <ul class="sub-works-menu">
                <li class="sub-works__item"><a class="sub-works__link" href="">All</a></li>
                <li class="sub-works__item"><a class="sub-works__link" href="">Coding</a></li>
                <li class="sub-works__item"><a class="sub-works__link" href="">Design&Coding</a></li>
                <li class="sub-works__item"><a class="sub-works__link" href="">WordPress</a>
                </li>
            </ul>
            <div class="works-wrap">
                <?php $args = array(
                    'post_type' => 'works', // 既存の投稿タイプを指定
                    'posts_per_page' => -1, // すべての投稿を取得
                );

                $works_query = new WP_Query($args); ?>

                <?php if (is_category()) : ?>
                    <?php the_category(); ?>

                <?php else : ?>
                    <?php if ($works_query->have_posts()) :
                        while ($works_query->have_posts()) : $works_query->the_post();
                    ?>
                            <a class="works-wrap__link" href="<?php the_permalink(); ?>">
                                <div class="works-item">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php endif; ?>
                                </div>
                            </a>


                        <?php endwhile;
                        wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p>制作実績はありません。</p>

                    <?php endif; ?>

                <?php endif; ?>


            </div>
        </div>
    </section>


    <?php get_template_part('component/footer-nav') ?>

    <?php get_footer(); ?>
</body>

</html>