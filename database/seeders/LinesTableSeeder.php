<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('lines')->delete();

        \DB::table('lines')->insert(array (
            0 =>
            array (
                'id' => 1,
                'structure_id' => 2,
                'name' => 'Ligne A',
                'description' => ''
            ),
            1 =>
            array (
                'id' => 2,
                'structure_id' => 2,
                'name' => 'Ligne B',
                'description' => '',
            ),
            2 =>
            array (
                'id' => 3,
                'structure_id' => 2,
                'name' => 'Ligne C',
                'description' => '',
            ),
            3 =>
            array (
                'id' => 4,
                'structure_id' => 1,
                'name' => 'Ligne 1L',
                'description' => '',
            ),
            4 =>
            array (
                'id' => 5,
                'structure_id' => 1,
                'name' => 'Ligne 2L',
                'description' => '',
            ),
            5 =>
            array (
                'id' => 6,
                'structure_id' => 1,
                'name' => 'Ligne 5L',
                'description' => '',
            ),
            6 =>
            array (
            'id' => 7,
            'structure_id' => 3,
            'name' => 'Ligne 1',
            'description' => '',
            ),
            7 =>
            array (
            'id' => 8,
            'structure_id' => 3,
            'name' => 'Ligne 2',
            'description' => '',
            ),
            8 =>
            array (
            'id' => 9,
            'structure_id' => 3,
            'name' => 'Ligne 3',
            'description' => '',
            ),
        ));


    }
}
