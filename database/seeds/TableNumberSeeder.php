<?php

use Illuminate\Database\Seeder;

class TableNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Sms::class, 50)->create();
    }
}
