<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Visitor;
Use App\Models\User;


class VisitorSeeder extends Seeder
{

    public function run()
    {

    Visitor::factory()->count(50)->create();
    
    }

}

