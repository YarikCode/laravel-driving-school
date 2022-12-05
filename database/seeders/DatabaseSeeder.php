<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $names = ['KIA Ceed', 'Hyundai Elantra', 'Hyundai Accent'];
        $numbers = ['н698го', 'в791ен', 'в567нр'];

        for($i = 0; $i < count($names); $i++){
            Car::create(['name' => $names[$i], 'number' => $numbers[$i]]);
        }
    }
}
