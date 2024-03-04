<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $producto = new Producto();
        $producto->nombre= 'Vinilo DANCE WITH ME';
        $producto->precio= 47000;
        $producto->marca= 'AFTERLIFE';
        $producto->cantidad= 4;
        $producto->url='dance-w-me.jpg';
        $producto->descripcion='Tracks: dance with me (original)';
        $producto->isbn= 1234567896;
        $producto->id_tipo_producto=1;
        $producto->save();

        $producto2 = new Producto();
        $producto2->nombre= 'Vinilo BIRD EP';
        $producto2->precio= 45000;
        $producto2->marca= 'AFTERLIFE';
        $producto2->cantidad= 6;
        $producto2->url='bird.jpg';
        $producto2->descripcion='Tracks:bird-secluded';
        $producto2->isbn= 1234567896;
        $producto2->id_tipo_producto=1;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre= 'Vinilo CHACHA';
        $producto3->precio= 47000;
        $producto3->marca= 'AFTERLIFE';
        $producto3->cantidad= 2;
        $producto3->url='chacha.jpg';
        $producto3->descripcion='Tracks: chacha - preciouse unica - majstar';
        $producto3->isbn= 1234567896;
        $producto3->id_tipo_producto=1;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre= 'Vinilo THE MIRAGE';
        $producto4->precio= 45000;
        $producto4->marca= 'AFTERLIFE';
        $producto4->cantidad= 8;
        $producto4->url='the-mirage.jpg';
        $producto4->descripcion='the mirage -northen lights';
        $producto4->isbn= 1234567896;
        $producto4->id_tipo_producto=1;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->nombre= 'Vinilo BE SHARP SAY NOWT';
        $producto5->precio= 40000;
        $producto5->marca= 'PATRICK TOPPING';
        $producto5->cantidad= 10;
        $producto5->url='Be-sharp.jpg';
        $producto5->descripcion='Tracks: Be sharp say nowt - track chang';
        $producto5->isbn= 1234567896;
        $producto5->id_tipo_producto=1;
        $producto5->save();

        $producto6 = new Producto();
        $producto6->nombre= 'Vinilo IN MY MIND';
        $producto6->precio= 35000;
        $producto6->marca= 'LENSKE';
        $producto6->cantidad= 2;
        $producto6->url='In-my-mind.jpg';
        $producto6->descripcion='Tracks: In my mind - tripping - first light';
        $producto6->isbn= 1234567896;
        $producto6->id_tipo_producto=1;
        $producto6->save();

    }
}
