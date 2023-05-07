<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProductLinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_lines')->delete();

        DB::table('product_lines')->insert(array (
            0 =>
            array (
                'product_id' => 1,
                'line_id' => 4,
                'cadence' => 10,
                'uniteprod' => 'Plt',
            ),
            1 =>
            array (
                'product_id' => 2,
                'line_id' => 5,
                'cadence' => 20,
                'uniteprod' => 'Plt',
            ),
            2 =>
            array (
                'product_id' => 3,
                'line_id' => 6,
                'cadence' => 30,
                'uniteprod' => 'Plt',
            ),
            3 =>
            array (
                'product_id' => 4,
                'line_id' => 1,
                'cadence' => 10,
                'uniteprod' => 'Plt',
            ),
            4 =>
            array (
                'product_id' => 4,
                'line_id' => 2,
                'cadence' => 10,
                'uniteprod' => 'Plt',
            ),
            5 =>
            array (
                'product_id' => 4,
                'line_id' => 3,
                'cadence' => 10,
                'uniteprod' => 'Plt',
            ),
            6 =>
            array (
                'product_id' => 5,
                'line_id' => 2,
                'cadence' => 12,
                'uniteprod' => 'Plt',
            ),
            7 =>
            array (
                'product_id' => 6,
                'line_id' => 3,
                'cadence' => 15,
                'uniteprod' => 'Plt',
            ),
            8 =>
            array (
                'product_id' => 7,
                'line_id' => 7,
                'cadence' => 10,
                'uniteprod' => 'Plt',
            ),
            9 =>
            array (
                'product_id' => 8,
                'line_id' => 8,
                'cadence' => 5,
                'uniteprod' => 'Plt',
            ),
            10 =>
            array (
                'product_id' => 8,
                'line_id' => 9,
                'cadence' => 8,
                'uniteprod' => 'Plt',
            ),
        ));


    }
}
