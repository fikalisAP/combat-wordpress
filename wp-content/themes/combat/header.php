<?php $front_id = get_option('page_on_front'); ?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <? wp_head(); ?>
    <title>COMBAT</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__top">
                <a class="logo__link" href="<?php echo get_home_url(); ?>">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.svg" alt="Логотип 'Комбат' ">
                </a>
                <?php wp_nav_menu([
                    'theme_location'  => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'menu',
                    'menu_class'      => 'menu__items',
                    'add_a_class'     => 'menu__link',
                ]); ?>
                <div class="menu__contacts">
                    <a class="menu__phone" href="tel:<? $value = get_field('phone-inner', $front_id);
                                                        echo $value; ?>"><? $value = get_field('phone', $front_id);
                                                                                                                        echo $value; ?></a>
                    <a class="menu__email" href="<? $value = get_field('email', $front_id);
                                                    echo $value; ?>"><? $value = get_field('email', $front_id);
                                                                                                                echo $value; ?></a>
                </div>
                <button class="menu__btn">
                    <span></span>
                </button>
            </div>
        </div>
    </header>