<?php

namespace Database\Seeders;

use App\Models\Structure;
use Illuminate\Database\Seeder;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $structure = Structure::create([
            'name' => 'Huile',
        ]);
        $structure = Structure::create([
            'name' => 'Sucre',
        ]);
        $structure = Structure::create([
            'name' => 'Margarine',
        ]);
        $structure->save();
    }
}
