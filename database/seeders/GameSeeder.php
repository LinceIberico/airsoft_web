<?php

namespace Database\Seeders;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game1 = new Game;
        $game1->game_category_id = 1;
        $game1->name = "Partida Sab 15-04-2023";
        $game1->description = "Se puede usar HPA";
        $game1->rules = "Normativa del campo.";
        $game1->equipment = "Máscara de protección y bolas BIO.";
        $game1->start_game = Carbon::parse('2023-04-15');
        $game1->end_game = Carbon::parse('2023-04-15');
        $game1->price = 8.00;
        $game1->place = "Campo Airsoft Sin Fronteras";
        $game1->save();

        $game2 = new Game;
        $game2->game_category_id = 1;
        $game2->name = "Partida Dom 26-04-2023";
        $game2->description = "Se puede usar HPA";
        $game2->rules = "Normativa del campo.";
        $game2->equipment = "Máscara de protección y bolas BIO.";
        $game2->start_game = Carbon::parse('2023-04-26');
        $game2->end_game = Carbon::parse('2023-04-26');
        $game2->price = 8.00;
        $game2->place = "Campo Airsoft Sin Fronteras";
        $game2->save();

        $game1 = new Game;
        $game1->game_category_id = 3;
        $game1->name = "Operación Trueno";
        $game1->description = "MILSIM de alta intensidad con duración de 72h sin paradas intermedias. Se desarrollará en terreno de montaña.";
        $game1->rules = "El material será individual o de grupo con limitación de munición a 300bbs por jugador de asalto, 100bbs para tirador, 100bbs para francotiradores y 1000 para apoyo.";
        $game1->equipment = "Uso de bolas BIO, cuerda para rappel, mochila de al menos 50 litros, será necesario llevar todo el material en la mochila.";
        $game1->start_game = Carbon::parse('2023-06-16');
        $game1->end_game = Carbon::parse('2023-04-18');
        $game1->price = 60.00;
        $game1->place = "Sierra Norte de Sevilla";
        $game1->save();

    }
}
