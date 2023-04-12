<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $club4 = new Club;
        $club4->name = "Sin Equipo";
        $club4->description = "No tiene equipo ni club.";
        $club4->active = true;
        $club4->save();

        $club1 = new Club;
        $club1->name = "Mercenarios Sevilla";
        $club1->description = "Equipo de amigos de Sevilla que entrenan y mejoran día a día su competividad.";
        $club1->active = true;
        $club1->save();

        $club2 = new Club;
        $club2->name = "Airsoft Spain";
        $club2->description = "Jugadores que tienen como afición el airsoft de toda España.";
        $club2->active = true;
        $club2->save();

        $club3 = new Club;
        $club3->name = "Club Montesierra";
        $club3->description = "Club abierto a nuevos miembros.";
        $club3->active = true;
        $club3->save();
    }
}
