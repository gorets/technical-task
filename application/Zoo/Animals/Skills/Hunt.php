<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 15:46
 */

namespace App\Zoo\Animals\Skills;


use App\Zoo\Log;
use App\Zoo\Zoo;

/**
 * Class Hunt
 * @package App\Zoo\Animals\Skills
 */
trait Hunt
{
    /**
     * @param string $to
     * @return string
     */
    public function hunt($to = '')
    {
        if ($to) {
            if (in_array($to, $this->hunts)) {
                Log::add($this->type . ' ' . $this->name . ' is hunt to ' . $to . '!!!');
                $zoo = Zoo::getInstance();
                $objects = $zoo->findAnimalsByType($to);
                if ($objects) {
                    $zoo->dieAnimals($objects[0]->type);
                } else {
                    Log::add($this->type . ' ' . $this->name . ' did not find ' . $to . ' for hunting :(');
                }
            } else {
                Log::add($this->type . ' not hunt to ' . $to . '!!!', 'Warning');
            }
        }
    }
}