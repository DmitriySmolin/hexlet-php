<?php
/**
 * Application entry point
 *
 * PHP version 8.1
 *
 * @category PHP
 * @package  Not_Package
 * @author   Dmitry Smolin <neox56@gmail.com>
 * @license  https://github.com/DmitriySmolin/hexlet-php/master/licence.txt BSD
 * @link     not link
 */
require_once __DIR__ . '/vendor/autoload.php';

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;

print_r(Runner\run());