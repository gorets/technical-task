<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 15:46
 */

namespace App\Zoo\Animals\Skills;


use App\Zoo\Log;

trait Hunt
{
    public function hunt($target='')
    {
        if ($target) {
            if (in_array($target, $this->hunts)) {
                return $this->getAnimalType() .' '. $this->name .' is hunt to '. $target .'!!!';
            } else {
                Log::add($this->type .' not hunt to '. $target .'!!!', 'Warning');
            }
        }
    }
}