<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u0081082_zaobrazovanie');

/** Имя пользователя MySQL */
define('DB_USER', 'u0081082_zaobraz');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'u0081082_zaobrazovanie');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '4@8z/Jw #Kf<[ffY--y IRKSqz.+Xm_)x&8~cWh~#XD/N|kQ/YJ8,Acv:9j[{f9z');
define('SECURE_AUTH_KEY',  'tCsq$fZT/<>~i#6Fx:aIj(!G7{a5{H.=;PX$Stf35SU~Sy++Q+g+8H9}$Sg+;K-y');
define('LOGGED_IN_KEY',    'B@]-^tPN~oWck^u*]i!6.8H{7x6-nbKWK{6vBA<w;}qW[)o3OF>uZPA7:n}9k648');
define('NONCE_KEY',        'axP1UK%Jhz1$}W|%[nSCo0</Au?k``}QG`Z6>2T[UGQ|k{!)2# wA3-z{u:FS3=T');
define('AUTH_SALT',        'gpW3e<@P{S)R$}C9+!#~60R~`[s*!.l({U{ I{e~r2IOi{gCk{RPoWx>VNc$:/3=');
define('SECURE_AUTH_SALT', 'D-wZ;{R$Lpd,arw,Xt_2k-PLIY9TFh~S)4.)1+]%#~=NSp+qS5eDWC]6s+>#U~sq');
define('LOGGED_IN_SALT',   'P(W]G]1OttRB-X3lVh7k:18!1CZs??`wN!k3HaL-AqVS|PWN}r3_u#avJf9_j5[k');
define('NONCE_SALT',       '`*>.hP?)7zuYZzrIkS-HYvUQFzkp|Rj4G)OdZ#|,bId<QM%V>OV0Sp{~&zFR|4VK');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wpzo_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
