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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Vlmu$y6x`7.-myd743b-%z6$Vt1@C9%NgM^l7D92L2TMao>feQ}.Jhyce013t^ux' );
define( 'SECURE_AUTH_KEY',  'L];~* i$jt-vhC`3L{JiWX.YVzmJX>y@T8^j_;]#_@@f0zxMDL0sHtrRh8T3;e>L' );
define( 'LOGGED_IN_KEY',    'nlob^@&J%W{i{LZt:gdva}yNxRDc-d*_+fH`nCAs#6d+hb8F]BQXM3Ei7A.}MrLE' );
define( 'NONCE_KEY',        'rT{8ApbrtOpxyXi@%Ly-50Eg9A=QDj2UF8_G&`| IM/dNH<=4eCu/>lg3y.Si2w~' );
define( 'AUTH_SALT',        ';p|YX;YbPo[Z0yDR8{c<%l}O=Ki+)}>0 Oj$SP^Mg-M%+=d-.>YC*T[wtjhjx0/K' );
define( 'SECURE_AUTH_SALT', 'Z^xFt69x#=F8mvF.w|%Uqz+zpo:rn6n_(j_&C]w]qoS</1l{AVR7M&/Izor,O9Qi' );
define( 'LOGGED_IN_SALT',   '}@/1v(jW6hxID6(5Yq{QU89E/V3#jYqsTPPoR-dVZNc_VG}EY)n8e*{&lM!W9~*<' );
define( 'NONCE_SALT',       '=P SEb,-m${@Z>UMgON&B7,p8$j~%{4$$$%vk0WRdrck|S}k3cxXCV4]k=HJDtfy' );

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
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
