<?php
require_once 'vendor/autoload.php';


$faker = Faker\Factory::create();

echo $faker->email;
echo "\n";
echo $faker->name;
echo "\n";
echo $faker->city;
echo "\n";
echo $faker->text;
echo "\n";