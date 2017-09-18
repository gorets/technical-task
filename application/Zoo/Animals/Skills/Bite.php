<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:27
 */

namespace App\Zoo\Animals\Skills;

/**
 * Class Bite
 * @package App\Zoo\Animals\Skills
 */
trait Bite
{
    /**
     * @return string
     */
    public function bite()
    {
        return $this->type . ' ' . $this->name . ' BITES!!!';
    }
}