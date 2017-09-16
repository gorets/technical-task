<?php

/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:08
 */

namespace App\Zoo\Animals\Skills;

trait Meow
{
    public function meow()
    {
        return $this->getAnimalType() .' '. $this->name.' MEOWED!!!';
    }
}