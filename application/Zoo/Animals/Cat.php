<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 20:58
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\Animal,
    App\Zoo\Animals\Skills\Meow;


/**
 * Class Cat
 * @package App\Zoo\Animals
 */
class Cat extends Animal implements AnimalInterface
{
    protected $hunts = ['Rat', 'Sparrow'];

    use Meow;
}