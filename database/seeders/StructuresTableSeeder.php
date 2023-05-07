<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StructuresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('structures')->delete();

        \DB::table('structures')->insert(array (
            0 =>
            array ( 'name' => 'CDH'),
            1 =>
            array ('name' => 'CDS'),
            2 =>
            array ('name' => 'MRG'),
        ));


    }
}
