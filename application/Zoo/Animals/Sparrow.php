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
    App\Zoo\Animals\Skills\Fly;

/**
 * Class Sparrow
 * @package App\Zoo\Animals
 */
class Sparrow extends Animal implements AnimalInterface
{
    use Fly;

}