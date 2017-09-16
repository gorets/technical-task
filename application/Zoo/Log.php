<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 22:39
 */

namespace App\Zoo;


class Log
{
    private static $data = [];
    private static $separator = '<br />';

    public static function add($value, $type='info')
    {
        self::$data[] = ['type' => $type, 'value' => $value];
    }

    public static function getFormattedLog()
    {
        $out = '<pre>';
        if (self::$data) {
            foreach (self::$data as $item) {
                $out .= $item['type'] .":\t". $item['value']. self::$separator;
            }
        }
        $out .= '</pre>';
        return $out;
    }
}