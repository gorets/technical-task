<?php

/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:08
 */

namespace App\Zoo\Animals\Skills;

/**
 * Class Meow
 * @package App\Zoo\Animals\Skills
 */
trait Meow
{
    /**
     * @return string
     */
    public function meow()
    {
        return $this->type . ' ' . $this->name . ' MEOWED!!!';
    }
}