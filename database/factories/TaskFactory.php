<?php

use Faker\Generator as Faker;
use WiGeeky\Todo\Models\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'       => $faker->words(5, true),
        'description' => $faker->paragraph(),
        'status'      => Task::STATUS_OPEN, // Tasks generated by factory are open by default, unless overridden by state
    ];
});
