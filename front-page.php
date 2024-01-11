<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body id="app" class="frontbody body">

    <?php get_template_part('component/header-nav'); ?>

    <div class="mv">
        <div class="mv-inner">
            <h2 class="mv-title">
                <div class="mv-title__profile"></div>
            </h2>
            <ul class="mv-list">
                <li class="mv-item"><a class="mv-link" target="_blank"
                        href="https://www.linkedin.com/in/s-kaisei/">Linkedin</a></li>
                <li class="mv-item"><a class="mv-link" target="_blank"
                        href="https://github.com/k-datacloud?tab=repositories">Github</a></li>
            </ul>
            <p class="copyright">©SK-PORTFOLIO</p>
        </div>
    </div>

    <?php get_footer(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

</body>

</html>