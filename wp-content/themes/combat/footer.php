
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.svg" alt="" class="footer__logo">
                <div class="footer__contacts">
                    <span>Лазертаг-клуб “Комбат”</span>
                    <a class="footer__contacts-tel" href="tel:<? the_field('phone-inner'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="">
                        <p class="footer__contacts-tel-link"><? the_field('phone'); ?></p>
                    </a>
                </div>
                <div class="footer__social">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/vk-icons.svg" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/inst-icons.svg" alt="">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>