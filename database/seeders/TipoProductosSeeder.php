<?php

namespace Database\Seeders;

use App\Models\TipoProducto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoProducto::create(['descripcion' => 'Vinilo']);
        TipoProducto::create(['descripcion' => 'Consola']);
        TipoProducto::create(['descripcion' => 'Audio']);
        TipoProducto::create(['descripcion' => 'Cables']);

    }
}
