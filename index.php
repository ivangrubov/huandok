<?php
// Needed for debugging //
defined('DEBUG_MRCLO') or define('DEBUG_MRCLO', 0);
if (DEBUG_MRCLO) {  ini_set('display_errors', '1'); error_reporting(E_ALL); } else {  ini_set('display_errors', '0'); }
// Needed for debugging //

// We indicate the token from the personal account                         || Указываем токен с личного кабинета
// Change the second value, which is written with a lowercase letter       || Меняем второе значение, которое написанно с маленькой буквы
define("TOKEN", "9ee0abc0-88e6-43a8-9095-5045d7222f85");

/*
Prepared and Recommended Checks                                            || Подготовленные и рекомендуемые проверки

common           - Checking for all checks, including Referer and UTM      || Проверка по всем проверкам, включая Referer и UTM
tiktok           - Using checks more suitable for tiktok                   || Использование проверок более подходящих под тикток
google_search    - Using checks more suitable for Google Search            || Использование проверок более подходящих под Google Search
google_kms_other - Using checks more suitable for Google Kms               || Использование проверок более подходящих под Google Кмс с учетом прил / youtube/ discavery
*/
define("REVISE", "google_search");

// Local file or link to page for bots                                     || Локальный файл или ссылку на страницу для ботов
define("WHITE_URL", "main.html");

/*
local    - opening a local white file (Attention to the link to apply!)    || открытие локального белого файла (Внимание на ссылку не действует!)
iframe   - opening a white link in a frame                                 || открытие вайт ссылки во фрейме
redirect - redirect by link to white                                       || редирект по ссылки на вайт
*/
define("WHITE_SETTINGS", "local");

// Switch to button cloaking mode                                          || Переключение в режим клоакинга кнопки
// true - enabled, false - disabled                                        || true  - включена, false - выключена
define("MODE_BUTTON", false);

// REFERER check                                                           || Проверка REFERER-а
// true - enabled, false - disabled                                        || true  - включена, false - выключена
define("REFERER", true);

// UTM check                                                               || Проверка по UTM
// true - enabled, false - disabled                                        || true  - включена, false - выключена
define("UTM", true);

require 'mrclo_core.php';
mrclo_init();
?>
