<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:22
 */

namespace App\Zoo\Animals\Skills;


/**
 * Class Swim
 * @package App\Zoo\Animals\Skills
 */
trait Swim
{
    /**
     * @return string
     */
    public function swim()
    {
        return $this->type . ' ' . $this->name . ' is SWIM!!!';
    }

}