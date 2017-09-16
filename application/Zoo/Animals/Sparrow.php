<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 21:00
 */

namespace App\Zoo\Animals;

use App\Zoo\Animals\Common\AnimalInterface,
    App\Zoo\Animals\Common\AnimalAbstract,
    App\Zoo\Animals\Skills\Fly;

class Sparrow extends  AnimalAbstract implements AnimalInterface
{
    use Fly;

}