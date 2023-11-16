<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('component/header-nav'); ?>
    <section class="privacy">
        <div class="privacy-inner">
            <h1 class="privacy__title"></h1>
            <div class="privacy-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <?php get_template_part('component/footer-nav') ?>
    <?php get_footer(); ?>
</body>

</html>