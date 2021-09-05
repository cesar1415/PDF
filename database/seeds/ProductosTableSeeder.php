<?php

use App\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 30; $i++) {
            Producto::create([
               'nombre'          => $faker->text(10),
               'descripcion'     => $faker->text(20),
               'existencia'      => $faker->randomDigit(6),
               'lote'            => $faker->unique()->text(6),
               'fecha_de_compra' => $faker->date($format = 'Y-m-d', $max = 'now'),
           ]);
       }
    }
}
