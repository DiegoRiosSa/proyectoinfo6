<?php

namespace Database\Seeders;

use App\Models\Persona;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Persona::insert([
         [
            'persona' => 'Cliente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ], 
         [
            'persona' => 'Proveedor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         ],  
        ]);
    }
}
