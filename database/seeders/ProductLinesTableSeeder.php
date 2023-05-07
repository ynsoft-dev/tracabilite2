<?php

namespace Database\Seeders;

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
        

        \DB::table('product_lines')->delete();
        
        \DB::table('product_lines')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'line_id' => 4,
                'cadence' => 10,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'product_id' => 2,
                'line_id' => 5,
                'cadence' => 20,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'product_id' => 3,
                'line_id' => 6,
                'cadence' => 30,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'product_id' => 4,
                'line_id' => 1,
                'cadence' => 10,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'product_id' => 4,
                'line_id' => 2,
                'cadence' => 10,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'product_id' => 4,
                'line_id' => 3,
                'cadence' => 10,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'product_id' => 5,
                'line_id' => 2,
                'cadence' => 12,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'product_id' => 6,
                'line_id' => 3,
                'cadence' => 15,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'product_id' => 7,
                'line_id' => 7,
                'cadence' => 10,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'product_id' => 8,
                'line_id' => 8,
                'cadence' => 5,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'product_id' => 8,
                'line_id' => 9,
                'cadence' => 8,
                'uniteprod' => 'Plt',
                'deleted_at' => NULL,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}