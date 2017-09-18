<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:21
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\Animal,
    App\Zoo\Animals\Skills\Swim;

/**
 * Class Dolphin
 * @package App\Zoo\Animals
 */
class Dolphin extends Animal implements AnimalInterface
{
    use Swim;

}