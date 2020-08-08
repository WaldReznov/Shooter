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
define( 'DB_NAME', 'wp_shooter' );

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
define( 'AUTH_KEY',         'W87-(=x~|D~J)~?vAPTp7XhKOK MZINZ?iEQPqh>Q0f3KL+Vr3~BCI|IMl6r!*!V' );
define( 'SECURE_AUTH_KEY',  'D!u`?c^Ww^bSl+m(QOQZmsUtq7nD ]bwRmx4fJ1())5z>|V:?/De?s)Q*3))]-7s' );
define( 'LOGGED_IN_KEY',    'ud;yqoa{q^*2@FKNhzWd:e1{5@@9^yl_^I Rm=_IzW?_J7|42<Hw?C!f9LJ!b[//' );
define( 'NONCE_KEY',        'U=[KBYcaS!`3}uQ*6sP;i,f{K6}fvjC[1lF3I>P_?!E1Y q2.y}pB9[9/%|l&A0)' );
define( 'AUTH_SALT',        'w*z2rJMN^ Z6_`kwiLpTC2EFM2((h9mk?I#=3T#e4H&r(f$^ziY);Tp7@#y8)t-U' );
define( 'SECURE_AUTH_SALT', '{?x[N =se<L:`py%lFtF,3vrDq)`A7=814@wt4MQyJl<g2v~JN+W1)9Pms%?Fjqe' );
define( 'LOGGED_IN_SALT',   '.Xx>xQ7iunHMe!$WxOz1#nj*A-o@+ov7Om]fZoaF<v||o9,Tt:):Bf=|7&9,ig38' );
define( 'NONCE_SALT',       '*!-S1yc{_;JcU&HH:EIByM6J*D_Lu`+Bj[+7Dzeh $mmg~=17h6}|pA^c#TB4EZT' );

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
