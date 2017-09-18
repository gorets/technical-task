<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:12
 */

namespace App\Zoo\Animals\Skills;

/**
 * Class Fly
 * @package App\Zoo\Animals\Skills
 */
trait Fly
{
    /**
     * @return string
     */
    public function fly()
    {
        return $this->type . ' ' . $this->name . ' is FLY!!!';
    }
}