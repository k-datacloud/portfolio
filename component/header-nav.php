<?php if (is_front_page()) : ?>

<header class="header">
    <h1 class="header__title"><a class="header__title--link" href="<?php echo home_url(); ?>">S.K</a></h1>
    <nav class="header__nav">
        <ul class="header-list">
            <li class="header-list__item"><a class="header-list__link " href="<?php echo get_page_link(7); ?>">ABOUT</a>
            </li>
            <li class="header-list__item"><a class="header-list__link push" href="#service">SERVICE</a>
            </li>
            <li class="header-list__item"><a class="header-list__link"
                    href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a></li>
            <li class="header-list__item"><a class="header-list__link"
                    href="<?php echo get_page_link(9); ?>">CONTACT</a></li>
        </ul>
    </nav>
</header>
<?php else : ?>
<header class="header">
    <h1 class="header__title"><a class="header__title--link" href="<?php echo home_url(); ?>">S.K</a></h1>
    <nav class="header__nav">
        <ul class="header-list">
            <li class="header-list__item"><a class="header-list__link under-page"
                    href="<?php echo home_url(); ?>">TOP</a>
            </li>
            <li class="header-list__item"><a class="header-list__link under-page"
                    href="<?php echo get_page_link(7); ?>">ABOUT</a>
            </li>
            <li class="header-list__item"><a class="header-list__link under-page push" href="#service">SERVICE</a>
            </li>
            <li class="header-list__item"><a class="header-list__link under-page"
                    href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a></li>
            <li class="header-list__item"><a class="header-list__link under-page"
                    href="<?php echo get_page_link(9); ?>">CONTACT</a>
            </li>
        </ul>
    </nav>
</header>
<?php endif; ?>