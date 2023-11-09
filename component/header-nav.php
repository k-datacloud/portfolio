<header class="header">
    <h1 class="header__title"><a class="header__title--link" href="<?php echo home_url(); ?>">S.K</a></h1>
    <p class="header__text">Welcome to my Portfolio</p>
    <div class="humburger">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
    </div>
</header>

<nav class="grnav">
    <ul class="header-list">
        <li class="header-list__item"><a class="header-list__link " href="<?php echo get_page_link(7); ?>">ABOUT</a>
        </li>
        <li class="header-list__item"><a class="header-list__link push" href="#service">SERVICE</a>
        </li>
        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a></li>
        <li class="header-list__item"><a class="header-list__link" href="<?php echo get_page_link(9); ?>">CONTACT</a>
        </li>
    </ul>
</nav>