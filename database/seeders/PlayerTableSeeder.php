<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //Self Add

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $players = [
                ['name' => 'Djokovic', 'nation' => 'SRB','rank' => '1', 'point' => '11.245'],
                ['name' => 'Alcaraz', 'nation' => 'Esp','rank' => '2', 'point' => '8.855'],
                ['name' => 'Medvedev', 'nation' => 'Rus','rank' => '3', 'point' => '7.600'],
                ['name' => 'Sinner', 'nation' => 'ITA','rank' => '4', 'point' => '6.490'],
              
            ];

            DB::table('player')->insert($players);
        }
    }
}
