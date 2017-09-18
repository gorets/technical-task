<?php

/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:07
 */

namespace App\Zoo\Animals\Skills;

/**
 * Class Eat
 * @package App\Zoo\Animals\Skills
 */
trait Eat
{
    /**
     * @return string
     */
    public function eat()
    {
        return $this->type . ' ' . $this->name . ' EATS';
    }

}