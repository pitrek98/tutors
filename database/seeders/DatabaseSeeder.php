<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Matematyka'],
            ['name' => 'Fizyka'],
            ['name' => 'Chemia'],
            ['name' => 'Biologia'],
            ['name' => 'Informatyka'],
            ['name' => 'Robienie Hałasu'],
            ['name' => 'Podstawy przedsiębiorczości'],
            ['name' => 'Muzyka'],
            ['name' => 'Geografia'],
            ['name' => 'Plastyka']
        ];
        DB::table('subjects')->insert($data);
        DB::table('tutors')->truncate();
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = ['name' => $faker->name, 'mark' => $faker->randomNumber(1), 'description' => $faker->text, 'mail' => $faker->email, 'subject_id' => $faker->numberBetween(1, 10)];
        }
        DB::table('tutors')->insert($data);
    }
}
