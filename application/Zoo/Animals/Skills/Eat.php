<?php

/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:07
 */

namespace App\Zoo\Animals\Skills;

trait Eat
{
    public function eat()
    {
        return $this->getAnimalType() .' '. $this->name.' EATS';
    }

}