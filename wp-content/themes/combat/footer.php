<?php $front_id = get_option( 'page_on_front' ); ?>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.svg" alt="" class="footer__logo">
            <div class="footer__contacts">
                <span>Лазертаг-клуб “Комбат”</span>
                <a class="footer__contacts-tel" href="tel:<? $value=get_field( 'phone-inner', $front_id ); echo $value; ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="">
                    <p class="footer__contacts-tel-link"><? $value=get_field( 'phone', $front_id ); echo $value; ?></p>
                </a>
            </div>
            <div class="footer__social">
                <a href="<? $value=get_field( 'social-vk', $front_id ); echo $value; ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/vk-icons.svg" alt="">
                </a>
                <a href="<? $value=get_field( 'social-instagram', $front_id ); echo $value; ?>">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/inst-icons.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

