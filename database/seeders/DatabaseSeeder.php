<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Artista;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $artista = new Artista();
        $artista->nombre= 'Marina';
        $artista->apellido= 'Mendez';
        $artista->save();

        $artista2 = new Artista();
        $artista2->nombre= 'Marina';
        $artista2->apellido= 'Mendez';
        $artista2->save();

        $this->call(ProductosSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
