<?php

namespace Database\Seeders;

use Database\Seeders\VisitorSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()

    {

    $this->call([VisitorSeeder::class]);

    }

}
