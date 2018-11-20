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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':rW$CbbXQuRIh{*v&9z4i,NXa[/GZ+F35X V&*`tY.J3o+`2+64[f{~rarT-wH(V');
define('SECURE_AUTH_KEY',  '>./ci^SnIW-##Ap%`xG:u2rt`&pAP?&8n>v3{m,|CRE?_%OzXyjTOoe<IWYJh?iY');
define('LOGGED_IN_KEY',    '&%&A/30HdY[GX.:@PO=c7^W-U(vu(39;uB@qk,G.1]=*IpP01;R[5,rdf01!(Czs');
define('NONCE_KEY',        'slG#9$a|fhn3H<ztf4V^nE9BDO{FOu<d]hV%QhE:gmhJ+qK&/PC-kUAzZVy^wL+*');
define('AUTH_SALT',        ';2AU13h!vi81@L`Z61k$gD+`XZ/m.2O;H-V*B_uF=MZo=NAWST%e(VTSy2l(tE-*');
define('SECURE_AUTH_SALT', 'B27Bw,^jM=PrVx;r)uEfXN=D@5)Pp<obh)#D<;+@Rr0}JR21+n,~=gvrzBL;K5k/');
define('LOGGED_IN_SALT',   '3=i9nl;Jlg?yl:i)c Ujce/}@waK$MRs&g]E=D ^jbeMn^&XIv%d2jRpkip?Qw1f');
define('NONCE_SALT',       '68d=Lz<[9lI^sG!5iQvj]+c+1>/H@0tM-gR ,8l:^<hm$g^0/Yf?FF!wW6q#*_ y');

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
