<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto = new Producto();
        $producto->nombre= 'Vinilo';
        $producto->save();

        $producto2 = new Producto();
        $producto2->nombre= 'Consola';
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre= 'Audio';
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre= 'Cables';
        $producto4->save();

    }
}
