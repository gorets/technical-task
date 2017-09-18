<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 20:52
 */

namespace App\Zoo;

use App\Zoo\Animals\Common\AnimalSkills;

/**
 * Class Zoo
 * @package App\Zoo
 */
class Zoo
{

    /**
     * @var
     */
    protected static $instance;

    /**
     * @var array
     */
    private $animals = [];
    /**
     * @var int
     */
    private $counter = 0;

    /**
     * Zoo constructor.
     */
    private function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }

    /**
     * @return Zoo
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * @param array $config
     */
    public function addAnimals(array $config)
    {
        foreach ($config as $animal) {
            $this->addAnimal($animal);
        }
    }

    /**
     * @param array $config
     */
    public function addAnimal(array $config)
    {
        $type = array_key_exists('type', $config) ? (string)$config['type'] : '';
        if (class_exists('App\Zoo\Animals\\' . $type)) {

            $this->counter++;
            $config['id'] = $this->counter;

            $cls = 'App\Zoo\Animals\\' . $type;
            $animal = new $cls($config);
            $this->animals[$config['id']] = $animal;
        } else {
            Log::add('Animal ' . $type . ' unknown in Zoo', 'Warning');
        }

    }

    /**
     * @param string $type
     * @param int $dieCount
     */
    public function dieAnimals($type = '', $dieCount = 1)
    {
        $animals = $this->findAnimalsByType($type);
        if ($animals) {
            $i = 0;
            foreach ($animals as $animal) {
                $i++;
                if ($i <= $dieCount) {
                    Log::add('Die ' . $animal->type . ' ' . $animal->name);
                    unset($this->animals[$animal->id]);
                }
            }
        }
    }

    /**
     * Feed all animals
     */
    public function feedAnimals()
    {
        foreach ($this->animals as $animal) {
            Log::add($animal->eat());
        }
    }

    /**
     * Get all animals and action
     */
    public function actionAnimals()
    {
        foreach ($this->animals as $animal) {
            foreach (AnimalSkills::allSkills() as $k => $skill) {

                if (method_exists($animal, $skill)) {
                    $log = $animal->$skill();
                    if ($log) {
                        Log::add($log);
                    }
                }
            }
        }
    }

    /**
     * @param string $type
     * @return array
     */
    public function findAnimalsByType($type = '')
    {
        $out = [];
        if ($this->animals) {
            reset($this->animals);
            foreach ($this->animals as $animal) {
                if ($animal->type == $type || $type == '') {
                    $out[] = $animal;
                    Log::add('Find ' . $animal->type . ' ' . $animal->name);
                }
            }
        } else {
            Log::add('Sorry, not found any animals in Zoo :(');
        }
        return $out;
    }


    /**
     * @return array
     */
    public function getAnimalsData()
    {
        return $this->animals;
    }
}