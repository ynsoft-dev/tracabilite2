<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('orders')->delete();

        \DB::table('orders')->insert(array (
            0 =>
            array (
                'numBC' => 23001474,
                'depotdest' => 'Oran',
                'dateorder' => '2023-05-08',
            ),
            1 =>
            array (
                'numBC' => 23001464,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-07',
            ),
            2 =>
            array (
                'numBC' => 23001438,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-07',),
            3 =>
            array (
                'numBC' => 23001423,
                'depotdest' => 'Constantine',
                'dateorder' => '2023-05-06',),
            4 =>
            array (
                'numBC' => 23001397,
                'depotdest' => 'Oran',
                'dateorder' => '2023-05-06',),
            5 =>
            array (
                'numBC' => 23001378,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-05',),
            6 =>
            array (
                'numBC' => 23001376,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-05',),
            7 =>
            array (
                'numBC' => 23001367,
                'depotdest' => 'Constantine',
                'dateorder' => '2023-05-04',),
            8 =>
            array (
                'numBC' => 23001352,
                'depotdest' => 'Oran',
                'dateorder' => '2023-05-04',),
            9 =>
            array (
                'numBC' => 23001350,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-03',),
            10 =>
            array (
                'numBC' => 23001339,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-03',),
            11 =>
            array (
                'numBC' => 23001335,
                'depotdest' => 'Constantine',
                'dateorder' => '2023-05-02',),
            12 =>
            array (
                'numBC' => 23001330,
                'depotdest' => 'Oran',
                'dateorder' => '2023-05-02',),
            13 =>
            array (
                'numBC' => 23001317,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-01',),
            14 =>
            array (
                'numBC' => 23001307,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-01',),
            15 =>
            array (
                'numBC' => 23001470,
                'depotdest' => 'Constantine',
                'dateorder' => '2023-05-08',),
            16 =>
            array (
                'numBC' => 23001476,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-09',),
            17 =>
            array (
                'numBC' => 23001484,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-09',),
            18 =>
            array (
                'numBC' => 23001480,
                'depotdest' => 'Oran',
                'dateorder' => '2023-05-10',),
            19 =>
            array (
                'numBC' => 23001485,
                'depotdest' => 'Constantine',
                'dateorder' => '2023-05-10',),
            20 =>
            array (
                'numBC' => 23001489,
                'depotdest' => 'Bouira',
                'dateorder' => '2023-05-11',),
            21 =>
            array (
                'numBC' => 23001499,
                'depotdest' => 'Alger',
                'dateorder' => '2023-05-11',),
        ));


    }
}
