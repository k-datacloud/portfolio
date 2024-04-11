<header class="header">
        <div class="header-inner">
                <h1 class="header__title">
                        <span class="header__title--logo">My name is Sadatoki Kaisei</span>
                        <span class="header__title--logo">I'm a web developer based in Japan</span>
                        <span class="header__title--logo">Click <a class=" click-profile" href="<?php echo esc_url(get_page_link(7)) ?>">here</a> for detailed
                                profile</span>

                </h1>
                <div class="humburger">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                </div>
                <nav class="grnav">
                        <ul class="header-list">
                                <?php if (is_front_page()) : ?>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(get_page_link(7)); ?>">ABOUT</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_post_type_archive_link('works'))  ?>">WORKS</a></li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_page_link(9))  ?>">CONTACT</a>
                                        </li>
                                <?php else : ?>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(home_url()); ?>">TOP</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(get_page_link(7)); ?>">ABOUT</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_post_type_archive_link('works'))  ?>">WORKS</a></li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_page_link(9))  ?>">CONTACT</a>
                                        </li>
                                <?php endif ?>
                        </ul>
                </nav>
        </div>
</header>