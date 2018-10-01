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
define('DB_NAME', 'kg');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h@QCKeN+E9F{J4o%7P5B$|p8*2~v>][Uo-3s|qeq}J6E`Gn/nz@n({)v>fiYy,G-');
define('SECURE_AUTH_KEY',  'g|<Z#/g.1C[})[[z&k=f@(F?45h6-gXQH5eJy)s]{? 8ZV]CPsh1CMmYOi{^b/M}');
define('LOGGED_IN_KEY',    'm<v}0H#(zr?%cRZm?Zgp+s2P0#)}abQ,yD}kbidy/nXPg<rssH^O{7|PuMpvT9DF');
define('NONCE_KEY',        'q(sJe~-Ly974D$}/&7pbT=GI/_*&S/RP8=YMcdy$*E/cI4i|2cR[*kd0iJQfZ1,+');
define('AUTH_SALT',        '`woG5%O^ZGl-@pqJi;iRzu]4S~gaL?Kk![Rk cov$v`Dnq3yY=Ze305YlqsPf;NL');
define('SECURE_AUTH_SALT', ']J=VE/oi[:WE]41,sm9(gq-tbV=Y3>DdY@y`Ne|)4AKG-^=]lH{@ns^p.XzQ#;GK');
define('LOGGED_IN_SALT',   'OzU]^1e2ZwMPu*?<Yohz[4VW1eUt4dYZ7<hprZ[JvBuzBpa>*9]^m[%`mj7}g(pA');
define('NONCE_SALT',       'c[R<??p6XAe4>qT,7Cgv&v|V@9&T6*GRJlyJVLvxQ?[MwC$QS(S(MQk*+pY}ylSW');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'kg_';

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
