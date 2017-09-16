<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:22
 */

namespace App\Zoo\Animals\Skills;


trait Swim
{
    public function swim()
    {
        return $this->getAnimalType() .' '. $this->name.' is SWIM!!!';
    }

}