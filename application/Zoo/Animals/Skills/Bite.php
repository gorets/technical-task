<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:27
 */

namespace App\Zoo\Animals\Skills;


trait Bite
{
    public function bite()
    {
        return $this->getAnimalType() .' '. $this->name.' BITES!!!';
    }
}