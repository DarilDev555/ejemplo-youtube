<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category1 = new Category();
        $category1->name = 'Deportes';
        $category1->description = 'Categoria basada en deportes como futbol, baloncesto, tenis, etc.';
        $category1->active = true;
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Accion';
        $category2->description = 'Categoria basada en juegos de accion.';
        $category2->active = true;
        $category2->save();

        $category3 = new Category();
        $category3->name = 'Aventura';
        $category3->description = 'Categoria basada en juegos de aventura.';
        $category3->active = true;
        $category3->save();

        $category4 = new Category();
        $category4->name = 'Estrategia';
        $category4->description = 'Categoria basada en juegos de estrategia.';
        $category4->active = true;
        $category4->save();

        $category5 = new Category();
        $category5->name = 'Carreras';
        $category5->description = 'Categoria basada en juegos de carreras.';
        $category5->active = true;
        $category5->save();

        $category6 = new Category();
        $category6->name = 'Simulacion';
        $category6->description = 'Categoria basada en juegos de simulacion.';
        $category6->active = true;
        $category6->save();


    }
}
