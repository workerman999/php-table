<?php

use App\Car;
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
         $this->call(CarsTableSeeder::class);
    }
}

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->delete();

        Car::create([
                'mark' => 'Mercedes Benz',
                'model' => 'AMG S-63',
                'color' => 'Белый',
                'count' => 1,
                'price' => 5000000,
            ]
        );
        Car::create([
                'mark' => 'Audi',
                'model' => 'Q3',
                'color' => 'Синий',
                'count' => 3,
                'price' => 22000000,
            ]
        );
        Car::create([
                'mark' => 'ВАЗ',
                'model' => 'Нива',
                'color' => 'Черный',
                'count' => 7,
                'price' => 530000,
            ]
        );
        Car::create([
                'mark' => 'Skoda',
                'model' => 'Rapid',
                'color' => 'Оранжевый',
                'count' => 2,
                'price' => 1100000,
            ]
        );
        Car::create([
                'mark' => 'Skoda',
                'model' => 'Oktavia',
                'color' => 'Красный',
                'count' => 3,
                'price' => 1600000,
            ]
        );
        Car::create([
                'mark' => 'Toyota',
                'model' => 'Camry',
                'color' => 'Белый',
                'count' => 1,
                'price' => 2000000,
            ]
        );
        Car::create([
                'mark' => 'Lexus',
                'model' => 'LX-300',
                'color' => 'Черный',
                'count' => 2,
                'price' => 3000000,
            ]
        );
    }
}
