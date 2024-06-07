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
                <nav class="pc-nav">
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

        <div class="sp-nav">
                <nav class="sp-grnav">
                        <ul class="header-list">
                                <?php if (is_front_page()) : ?>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(get_page_link(7)); ?>">ABOUT</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_post_type_archive_link('works'))  ?>">WORKS</a></li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_page_link(9))  ?>">CONTACT</a>
                                        </li>
                                        <span class="border-line"></span>
                                        <p class="header-list__item header-list__title">Follow me</p>
                                        <li class="header-list__item"><a class="header-list__link--sn" target="_blank" href="https://github.com/k-datacloud?tab=repositories">Github</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link--sn" target="_blank" href="https://www.linkedin.com/in/s-kaisei/">Linkedin</a>
                                        </li>
                                <?php else : ?>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(home_url()); ?>">TOP</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link " href="<?php echo esc_url(get_page_link(7)); ?>">ABOUT</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_post_type_archive_link('works'))  ?>">WORKS</a></li>
                                        <li class="header-list__item"><a class="header-list__link" href="<?php echo esc_url(get_page_link(9))  ?>">CONTACT</a>
                                        </li>
                                        <span class="border-line"></span>
                                        <p class="header-list__item header-list__title">Follow me</p>
                                        <li class="header-list__item"><a class="header-list__link--sn" target="_blank" href="https://github.com/k-datacloud?tab=repositories">Github</a>
                                        </li>
                                        <li class="header-list__item"><a class="header-list__link--sn" target="_blank" href="https://www.linkedin.com/in/s-kaisei/">Linkedin</a>
                                        </li>
                                <?php endif ?>
                        </ul>
                </nav>
                <div class="close">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                </div>
        </div>
</header>