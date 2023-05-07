<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->delete();
        \DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => 'Elio1L',
                'description' => 'Huile Elio 1L',
                'DLUO' => 720,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'Elio2L',
                'description' => 'Huile Elio 2L',
                'DLUO' => 720,
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'Elio5L',
                'description' => 'Huile Elio 5L',
                'DLUO' => 720,
            ),
            3 =>
            array (
                'id' => 4,
                'code' => 'Skor1Kg',
                'description' => 'Sucre Sachet 1Kg',
                'DLUO' => 720,
            ),
            4 =>
            array (
                'id' => 5,
                'code' => 'Skor2Kg',
                'description' => 'Sucre Sachet 1Kg',
                'DLUO' => 720,
            ),
            5 =>
            array (
                'id' => 6,
                'code' => 'Skor5Kg',
                'description' => 'Sucre Sachet 1Kg',
                'DLUO' => 720,
            ),
            6 =>
            array (
                'id' => 7,
                'code' => 'Matina400',
                'description' => 'Margarnie Matina 400g',
                'DLUO' => 180,
            ),
            7 =>
            array (
                'id' => 8,
                'code' => 'Fleurial500',
                'description' => 'Margarine Fleurial 500g',
                'DLUO' => 360,
            ),
        ));


    }
}
