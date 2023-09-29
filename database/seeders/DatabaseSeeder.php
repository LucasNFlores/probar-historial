<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(10)->create();
        \App\Models\Device::factory(10)->create();
        \App\Models\Variable::factory(10)->create();
        \App\Models\Data::factory(10)->create();
        \App\Models\Hive::factory(10)->create();
        //Se ejecuta el seeder de apiario
        $this->call([ApiaryTableSeeder::class]);
        //Se ejecuta el seeder de Roles y permisos
        $this->call(PermissionTableSeeder::class);



        \App\Models\User::factory()->create([
            'name' => 'demo',
            'email' => 'demo@gmail.com',
            'password'=>'demo',
         ])->assignRole('User');
         \App\Models\User::factory()->create([
           'name' => 'Dario',
          'email' => 'poo@gmail.com',
          'password'=>'@dario_2023',
       ])->assignRole('Admin');
       \App\Models\User::factory()->create([
           'name' => 'Ulises',
          'email' => 'pepe@gmail.com',
          'password'=>'@ulises_2023',
       ])->assignRole('Admin');
       \App\Models\User::factory()->create([
           'name' => 'Augusto',
          'email' => 'a@gmail.com',
          'password'=>'@augusto_2023',
       ])->assignRole('Admin');
       \App\Models\User::factory()->create([
           'name' => 'Mauricio',
           'email' => 'mauricio@gmail.com',
           'password'=>'mauricio'
       ])->assignRole('Admin');
    }
}
