<footer class="footer">
    <div class="scrollbox">
        <!-- <p class="scrolltext" v-model="scrollCount">{{ scrollCount }}</p> -->
    </div>
    <div class="footer-inner">
        <h2 class="footer__title"></h2>
        <ul class="footer-list footer-menu">
            <li class="footer-list__item">
                <a class="footer-list__link" href="<?php echo home_url(); ?>">TOP</a>
            </li>
            <li class="footer-list__item">
                <a class="footer-list__link" href="<?php echo get_page_link(7); ?>">ABOUT</a>
            </li>
            <li class="footer-list__item">
                <a class="footer-list__link" href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a>
            </li>
            <li class="footer-list__item">
                <a class="footer-list__link" href="<?php echo get_page_link(9); ?>">CONTACT</a>
            </li>
            <li class="footer-list__item">
                <a class="footer-list__link" target="_blank" href="https://github.com/k-datacloud?tab=repositories">Github</a>
            </li>
            <li class="footer-list__item">
                <a class="footer-list__link" target="_blank" href="https://www.linkedin.com/in/s-kaisei/">Linkedin</a>
            </li>
        </ul>
    </div>
    <p class="copyright">©SK-PORTFOLIO</p>
</footer>