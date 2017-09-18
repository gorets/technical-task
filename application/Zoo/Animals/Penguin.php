<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 10:51
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\Animal,
    App\Zoo\Animals\Skills\Swim;

/**
 * Class Penguin
 * @package App\Zoo\Animals
 */
class Penguin extends Animal implements AnimalInterface
{
    use Swim;


}