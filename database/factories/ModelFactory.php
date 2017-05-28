<?php
/**
 * Create albums table
 *
 * @package CreateAlbumsTable
 */
$factory->define(
    App\Models\Album::class,
    function (Faker\Generator $faker) {
        return ['name' => $faker->name];
    }
);

$factory->define(
    App\Models\Photo::class,
    function (Faker\Generator $faker) {
        return [
            'name' => $faker->name,
            'photourl' => $faker->photourl,
            'albumid' => $faker->albumid,
        ];
    }
);
