<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:24
 */

namespace App\Zoo\Animals\Skills;


/**
 * Class Woof
 * @package App\Zoo\Animals\Skills
 */
trait Woof
{
    /**
     * @return string
     */
    public function woof()
    {
        return $this->type . ' ' . $this->name . ' is WOOF!!!';
    }
}