<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:12
 */

namespace App\Zoo\Animals\Skills;


trait Fly
{
    public function fly()
    {
        return $this->getAnimalType() .' '. $this->name.' is FLY!!!';
    }
}