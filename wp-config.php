<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'combat' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_|0gV^Qa3lTbw/[eF:9_V|*5Y.Etv[h|Ubf-vWetzdZ{JzvGR%*p:x5|J`t4AlUY' );
define( 'SECURE_AUTH_KEY',  'O@!k5,>K]QH3p<8-R(2jGwFhB$kKmkM.](*~Grgf=Y%$mst~GJmuOM/I8Q>@tW>Q' );
define( 'LOGGED_IN_KEY',    'RNb}v;_O%C/w$`D]^Ij;AU,yqPf$0{o&[84]5R_kdup&RqM,q*an?DhP[> H#4G)' );
define( 'NONCE_KEY',        'D07$A-^DJUZ~*p4#=^8v@`=%}$)~%qdyDtT<Qtj$0<oerx?4U7SJ$~@`6NOX{+&J' );
define( 'AUTH_SALT',        'Hkx`-!V+(UW&z}*8,T,)_I4M)qd[r@D);WIe0]wW)@`K89CdMG4t+8oqduW!v},!' );
define( 'SECURE_AUTH_SALT', 'Ee,-AE8a6$#PvM!SOo5# N.fN-_GBd$*H=w4]Xw1^M4bZ#N[xp@b]o[}v0Fk M5]' );
define( 'LOGGED_IN_SALT',   'nEK.VIJ3>52|R0D4ezY5:X|Sp[K^O^LVt{*:^050g{9dk&To[Lk`|A9cN;EvQM7x' );
define( 'NONCE_SALT',       'f>EZG]8QO2[>A[C#1Dpt/YtzmO+i:n|lMF$+1Rt_!8b#?6y>omE!8voYA`W^f&t3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
