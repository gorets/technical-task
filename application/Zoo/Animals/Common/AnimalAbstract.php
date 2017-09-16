<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 21:22
 */

namespace App\Zoo\Animals\Common;

use App\Zoo\Animals\Skills\Eat,
    App\Zoo\Animals\Skills\Hunt;
use App\Zoo\Log;


/**
 * Class AnimalAbstract
 * @package App\Zoo\Animals\Common
 */
class AnimalAbstract
{
    /**
     * @var array
     */
    private $params = [];
    /**
     * @var array
     */
    protected $hunts = [];

    use Eat, Hunt;

    /**
     * AnimalAbstract constructor.
     * @param $config
     */
    public function __construct($config)
    {
        if ($config) {
            foreach ($config as $k => $v){
                $this->params[$k] = $v;
            }
        }
        Log::add('Create new animal '.$this->type.' '.$this->name);
    }

    /**
     * @param $skill
     */
    public function execAction($skill, $opts=[])
    {
        if (method_exists($this, $skill)) {
            //Log::add($this->name.':'.$skill.':'.$opts);
            $log = $this->$skill($opts);
            if ($log) {
                Log::add($log);
            }
        } else {
            Log::add($this->type .' does not '. $skill, 'Warning');
        }
    }

    /**
     * @return string
     */
    public function getAnimalType()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->params[$name] = $value;
    }

    /**
     * @param $name
     * @return bool|mixed
     */
    public function __get($name)
    {
        return isset($this->params[$name]) ?  $this->params[$name]: false;
    }

    /**
     *
     */
    function __destruct() {
       Log::add('Die '.$this->type.' '.$this->name);
    }
}