<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 15.09.2017
 * Time: 20:51
 */

use App\Zoo\Zoo,
    App\Zoo\Log;

ini_set ( 'error_reporting', E_ALL );
ini_set ( 'display_errors', true );

require __DIR__ . '/vendor/autoload.php';

$config = [
    ['type' => 'Cat', 'name' => 'Tom', 'color' => 'white'],
    ['type' => 'Dog', 'name' => 'Bobik'],
    ['type' => 'Rat', 'name' => 'Lariska'],
    ['type' => 'Sparrow', 'name' => 'Chik-Chirik'],
    ['type' => 'Cat', 'name' => 'Murchik'],
    ['type' => 'Dog', 'name' => 'Sharik'],
];
$penguin = ['type' => 'Penguin', 'name' => 'Pigi'];
$badAnimal = ['type' => 'Chicken', 'name' => 'Chicka'];

Log::add('-----------------------');
Log::add('Init Zoo', 'Action');
$zoo = new Zoo();

Log::add('-----------------------');
Log::add('Add animals', 'Action');
Log::add('-----------------------');
$zoo->addAnimals($config);

Log::add('-----------------------');
Log::add('Add bad animal type', 'Action');
Log::add('-----------------------');
$zoo->addAnimal($badAnimal);

Log::add('-----------------------');
Log::add('List all animals in Zoo', 'Action');
Log::add('-----------------------');
$zoo->findAnimalsByType();

Log::add('-----------------------');
Log::add('We feed animals', 'Action');
Log::add('-----------------------');
$zoo->feedAnimals();

Log::add('-----------------------');
Log::add('Add new penguin', 'Action');
Log::add('-----------------------');
$zoo->addAnimal($penguin);

Log::add('-----------------------');
Log::add('All possible actions', 'Action');
Log::add('-----------------------');
$zoo->actionAnimals();

Log::add('-----------------------');
Log::add('Find all cats', 'Action');
Log::add('-----------------------');
$cats = $zoo->findAnimalsByType('Cat');

if ($cats[0]) {
    Log::add('-----------------------');
    Log::add('Cat test skills', 'Action');
    Log::add('-----------------------');
    $cats[0]->execAction('Meow');
    $cats[0]->execAction('Fly');
    $cats[0]->execAction('Woof');
    $cats[0]->execAction('Bite');
    $cats[0]->execAction('Eat');

    Log::add('-----------------------');
    Log::add('Test Cat hunt skill', 'Action');
    Log::add('-----------------------');
    $cats[0]->execAction('Hunt', 'Rat');
    $cats[0]->execAction('Hunt', 'Dog');
    $cats[0]->execAction('Hunt', 'Sparrow');
}

Log::add('-----------------------');
Log::add('Find all dogs', 'Action');
Log::add('-----------------------');
$dogs = $zoo->findAnimalsByType('Dog');
if ($cats[0]) {
    Log::add('-----------------------');
    Log::add('Dog test skills', 'Action');
    Log::add('-----------------------');
    $dogs[0]->execAction('Hunt', 'Rat');
    $dogs[0]->execAction('Hunt', 'Dog');
    $dogs[0]->execAction('Hunt', 'Sparrow');
    $dogs[0]->execAction('Hunt', 'Cat');
}


Log::add('-----------------------');
Log::add('Die dog', 'Action');
Log::add('-----------------------');
$zoo->dieAnimals('Dog');
Log::add('-----------------------');
$zoo->findAnimalsByType();

Log::add('-----------------------');
Log::add('Die other animals', 'Action');
Log::add('-----------------------');
$zoo->dieAnimals('', 100);

Log::add('-----------------------');
$zoo->findAnimalsByType();


echo Log::getFormattedLog();


function pre($s)
{
    echo "<pre>";
    print_r($s);
    echo "</pre>";
}

$_animals = $zoo->getAnimalsData();
//pre($_animals);
