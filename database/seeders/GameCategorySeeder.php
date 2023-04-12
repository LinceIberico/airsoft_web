<?php

namespace Database\Seeders;

use App\Models\GameCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = new GameCategory;
        $category1->name= "Partida Semanal";
        $category1->description = "Partida que se realiza los fines de semana.";
        $category1->save();

        $category2 = new GameCategory;
        $category2->name= "Speedsoft";
        $category2->description = "Modalidad similar al paintball de juegos rápidos.";
        $category2->save();

        $category3 = new GameCategory;
        $category3->name= "MILSIM";
        $category3->description = "Partida de simulación militar por objetivos.";
        $category3->save();

        $category4 = new GameCategory;
        $category4->name= "Ocasional";
        $category4->description = "Partida que se realiza por motivos especiales.";
        $category4->save();
    }
}
