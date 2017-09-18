<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 22:39
 */

namespace App\Zoo;


/**
 * Class Log
 * @package App\Zoo
 */
class Log
{
    private static $data = [];
    private static $separator = '<br />';

    /**
     * @param $value
     * @param string $type
     */
    public static function add($value, $type = 'info')
    {
        self::$data[] = ['type' => $type, 'value' => $value];
    }

    /**
     * @return string
     */
    public static function getFormattedLog()
    {
        $out = '';

        if (php_sapi_name() == "cli") {
            self::$separator = PHP_EOL;
        } else {
            self::$separator = '<br />';
        }

        if (self::$data) {
            foreach (self::$data as $item) {
                $out .= $item['type'] . ":\t" . $item['value'] . self::$separator;
            }
        }

        if (php_sapi_name() != "cli") {
            $out = '<pre>' . $out . '</pre>';
        }

        return $out;
    }
}