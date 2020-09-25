<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'skin_1488' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a[Te5fE~/,[:v9mCA>xl*^mCSC@!wv55dkg;ty~Y;#rPL<fa5@d>:i<*L<WhZ0wY' );
define( 'SECURE_AUTH_KEY',  '^4zbd.-X1AqpHxa;!=Y@KC_ Nb[J3BL}>&.;62Ls[AuuFVPUcmQAAO)b<Y!Dkg8I' );
define( 'LOGGED_IN_KEY',    'dc7hrcI59SS<IJsZgBn8gjlo=GTbQJHIZbKnc3J0;c?[3{A.n3A36_@m-:4Xo_f?' );
define( 'NONCE_KEY',        '~7IYSgvH}&ulLw67xb0q[NC[L&B7@<R^U0?lCz>0]M.>2Ln)Rz]tY[ }[+xc<M]a' );
define( 'AUTH_SALT',        'W]p#DB9DWELUNs)j(}oa.IjL9bqs}Eh# ?j6=9 j/rW2<W-Pf5PY<e<}M&?`H16f' );
define( 'SECURE_AUTH_SALT', 'QI=:&P$?iJv,P0z;x:`VV!vn-<Fx`:s&0Bjilqn?maKDyl#YH-s#,o>gI([=CrrY' );
define( 'LOGGED_IN_SALT',   '@!IOG))B]~m[F7V+NZP;c.yoAe@fH6#$7>i?My/Odk4ec@BO~|;9y}h;.uprB/ft' );
define( 'NONCE_SALT',       '*&+xA4K67r?ot/(@}kVr^/xf]vA[7H%1C<;{qHF fe*uLPQ~DSn8@.?$+0@kG@=t' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
