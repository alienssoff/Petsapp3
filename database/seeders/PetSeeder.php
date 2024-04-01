<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet;
        $pet->name = "Pocho";
        $pet->photo = "pocho.jfif";
        $pet->kind = "Dog";
        $pet->weight = 25;
        $pet->age =13;
        $pet->breed = "Criollo";
        $pet->location = "Manizales";

        $pet->save();


        $pet = new Pet;
        $pet->name = "Piter";
        $pet->photo = "piter.jfif";
        $pet->kind = "Dog";
        $pet->weight = 10;
        $pet->age =5;
        $pet->breed = "Pincher";
        $pet->location = "Manizales";

        $pet->save();

        
    }
}
