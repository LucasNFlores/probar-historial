<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Apiary;


class ApiaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Demo
        //apiario 1 
        Apiary::factory()->create([
            'name' => 'Apiario 1',
            'user_id' => '1',
            'location' => '-capiovi km 13',
            'latitude' => '-27.382718',
            'longitude' => '-55.903950',
            'created_at' => now(),
            'updated_at' => now(),
         ]);

    }
}
