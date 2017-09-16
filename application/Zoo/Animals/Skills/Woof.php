<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:24
 */

namespace App\Zoo\Animals\Skills;


trait Woof
{
    public function woof()
    {
        return $this->getAnimalType() .' '. $this->name.' is WOOF!!!';
    }
}