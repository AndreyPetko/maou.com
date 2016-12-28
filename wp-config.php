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
define('DB_NAME', 'streamla_maou');

/** Имя пользователя MySQL */
define('DB_USER', 'streamla_maou');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'dd99r5aq');

/** Имя сервера MySQL */
define('DB_HOST', 'streamla.mysql.ukraine.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+*n{LX0tBgIF(OReZ$tG*Z-<z_oNS}R{d4^!|k#ldM Tntp?=19=} m73zu?xIP+');
define('SECURE_AUTH_KEY',  ' INiBrNZwP[@p#OalaOV&Zq6[lgeAz[k{oA8!JCc4Cgzwgk1j0sfZxe;>,6h/q=(');
define('LOGGED_IN_KEY',    'mAO|_bU,v<{nO(M/2X&~jEp*%;Z<FT8+V9z~w[/#dk*6PZm#[Af1o3wdQHuzXQ0A');
define('NONCE_KEY',        '$3=YN8 #}Q-+VB)NA:g)K%;,p$_Y;ntSr%%%=!>ery~ss}BgY|<dv`o*RfD^!ud!');
define('AUTH_SALT',        '({$N[eG`yH3pXGLl;e6&7}jqh4ebUsq3.38DIN{ F6b):dGLzD%Wt!vl0uT`#|J6');
define('SECURE_AUTH_SALT', 'v$5rVU+)U)ws~3CTZf)zn9TdDhlB`/$axWqI#[]4NcTGel*vYk05ahB`$(S75K;o');
define('LOGGED_IN_SALT',   '?r*|bHc2&Zw8!plS)}7NtxlHTl&GZQ5H,BHIjZ9awJEcI$@a.p]R$R-f_TuJ )ET');
define('NONCE_SALT',       'EI$$v1Q#o7d,wJPQMm#.a>PQ^~uQu0;D*uk*.>u?gW+;mik]@B@bKks^(xa/q=V*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
