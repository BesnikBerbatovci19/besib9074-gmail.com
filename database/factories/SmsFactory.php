<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Sms;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Sms::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->numberBetween(1,5),
        'Titulli' =>$faker->name,
        'Number' =>$faker->phoneNumber,
        'sms_description' =>$faker->name,
        'data'=> date('Y-m-d ')
    ];
});
