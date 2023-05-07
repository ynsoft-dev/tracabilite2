<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 23001,
                'name' => 'Client 01',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 23002,
                'name' => 'Client 02',
                'wilaya' => 'Bejaia',
                'activite' => 'Industrie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 23003,
                'name' => 'Client 03',
                'wilaya' => 'Bejaia',
                'activite' => 'Produit Laitiers',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 23004,
                'name' => 'Client 04',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 23005,
                'name' => 'Client 05',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 23006,
                'name' => 'Client 06',
                'wilaya' => 'Bejaia',
                'activite' => 'Dépot',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 23007,
                'name' => 'Client 07',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 23008,
                'name' => 'Client 08',
                'wilaya' => 'Bejaia',
                'activite' => 'Aliments',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 23009,
                'name' => 'Client 09',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 23010,
                'name' => 'Client 10',
                'wilaya' => 'Bejaia',
                'activite' => 'Sucrerie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 23011,
                'name' => 'Client 11',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 23012,
                'name' => 'Client 12',
                'wilaya' => 'Bejaia',
                'activite' => 'Distribution',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}