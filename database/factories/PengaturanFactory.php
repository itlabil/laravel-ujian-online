<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Pengaturan;
use Faker\Generator as Faker;

$factory->define(Pengaturan::class, function (Faker $faker) {
    return [
        'nama_ujian' => $faker->name,
        'waktu' => rand(10,40),
        'nilai_min' => rand(1,10),
        'peraturan_ujian' => $faker->name,
    ];
});
