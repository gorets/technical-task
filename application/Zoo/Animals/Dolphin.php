<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:21
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\AnimalAbstract,
    App\Zoo\Animals\Skills\Swim;

class Dolphin extends  AnimalAbstract implements AnimalInterface
{
    use Swim;

}