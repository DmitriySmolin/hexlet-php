<?php

/**
 * Convert collection to upper case
 *
 * PHP version 8.1
 *
 * @category PHP
 * @package  PHP_Runner
 * @author   Dmitry Smolin <neox56@gmail.com>
 * @license  https://github.com/DmitriySmolin/hexlet-php/master/licence.txt BSD
 * @link     http://pear.php.net/package/PHP_Runner
 */

namespace Hexlet\Php\Runner;

/**
 * Function that converts to uppercase
 *
@return array
 */
function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(
        function ($name) {
            return strtoupper($name);
        }
    );

    return $collection;
}