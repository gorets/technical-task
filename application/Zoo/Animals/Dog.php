<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 21:00
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\Animal,
    App\Zoo\Animals\Skills\Woof,
    App\Zoo\Animals\Skills\Bite;

/**
 * Class Dog
 * @package App\Zoo\Animals
 */
class Dog extends Animal implements AnimalInterface
{
    /**
     * @var array
     */
    protected $hunts = ['Cat'];

    use Woof, Bite;

}