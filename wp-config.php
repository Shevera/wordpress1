<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pOUY7 0.d*1?=iyt]Zt|g|-8HGh37lXnN-t~?QN|zG;RpwjSN8b<elMWJ3[bh0Jb');
define('SECURE_AUTH_KEY',  'Y)A!+KeBlifF**|[{o_P2eFP+JumQ@imnB)n%E*wS%H]5nrmL+]F|-WSY#U+E(ZS');
define('LOGGED_IN_KEY',    '+(Buy}Akz$l}`|A]PzJ,E/Tl~1ZLm<,$ bEzVp?V-1n7O+dG8o78}-w`,c^%7icn');
define('NONCE_KEY',        'a7W]zBL%Tf~qxad6L)990?>gl_I&9eE$?Vr:-ehN_7.ywm/>7b]p^7B(+|&C~GS[');
define('AUTH_SALT',        'z(:I2#59|c+|7).;q1u&U(V*Ot`bj6fg!3J=`qf16-TZs ,K!T([yVNol|Q0P)$.');
define('SECURE_AUTH_SALT', 'Pfb*_PQeKYGhNPpRq->E$kg0)rtrBr>zn6#Iw15[+!!?{G;wLRggV*oUc)MV<@94');
define('LOGGED_IN_SALT',   'nv}d(|gG]z5m)$5XSkxel9>60Uh[wjEs-I;o|1~[G+m6s0#`0-0[:dL-Y5|Q9eU9');
define('NONCE_SALT',       'i5k+bs604t{$ugT%Al q%oPE~8R_cyagiqh05-!=v[T}W4pHW1F+}<,}gimit&j3');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
