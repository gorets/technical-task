<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 16.09.2017
 * Time: 11:00
 */

namespace App\Zoo\Animals\Common;


class AnimalSkills
{
    const SKILL_BITE = 'bite';
    const SKILL_EAT = 'eat';
    const SKILL_FLY = 'fly';
    const SKILL_MEOW = 'meow';
    const SKILL_SWIM = 'swim';
    const SKILL_WOOF = 'woof';
    const SKILL_HUNT = 'hunt';

    public static function allSkills(){

        return (new \ReflectionClass(static::class))->getConstants();
    }
}