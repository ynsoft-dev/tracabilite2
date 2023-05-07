<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_product')->delete();
        
        \DB::table('order_product')->insert(array (
            0 => 
            array (
                'order_id' => 13,
                'product_id' => 6,
                'quantity' => 11,
            ),
            1 => 
            array (
                'order_id' => 4,
                'product_id' => 2,
                'quantity' => 11,
            ),
            2 => 
            array (
                'order_id' => 6,
                'product_id' => 8,
                'quantity' => 3,
            ),
            3 => 
            array (
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 3,
            ),
            4 => 
            array (
                'order_id' => 11,
                'product_id' => 5,
                'quantity' => 12,
            ),
            5 => 
            array (
                'order_id' => 1,
                'product_id' => 5,
                'quantity' => 9,
            ),
            6 => 
            array (
                'order_id' => 21,
                'product_id' => 8,
                'quantity' => 2,
            ),
            7 => 
            array (
                'order_id' => 8,
                'product_id' => 3,
                'quantity' => 5,
            ),
            8 => 
            array (
                'order_id' => 1,
                'product_id' => 4,
                'quantity' => 2,
            ),
            9 => 
            array (
                'order_id' => 3,
                'product_id' => 2,
                'quantity' => 7,
            ),
            10 => 
            array (
                'order_id' => 22,
                'product_id' => 6,
                'quantity' => 10,
            ),
            11 => 
            array (
                'order_id' => 11,
                'product_id' => 7,
                'quantity' => 4,
            ),
            12 => 
            array (
                'order_id' => 21,
                'product_id' => 8,
                'quantity' => 11,
            ),
            13 => 
            array (
                'order_id' => 6,
                'product_id' => 7,
                'quantity' => 9,
            ),
            14 => 
            array (
                'order_id' => 8,
                'product_id' => 5,
                'quantity' => 2,
            ),
            15 => 
            array (
                'order_id' => 17,
                'product_id' => 1,
                'quantity' => 11,
            ),
            16 => 
            array (
                'order_id' => 21,
                'product_id' => 8,
                'quantity' => 2,
            ),
            17 => 
            array (
                'order_id' => 20,
                'product_id' => 8,
                'quantity' => 6,
            ),
            18 => 
            array (
                'order_id' => 1,
                'product_id' => 6,
                'quantity' => 5,
            ),
            19 => 
            array (
                'order_id' => 2,
                'product_id' => 8,
                'quantity' => 4,
            ),
            20 => 
            array (
                'order_id' => 13,
                'product_id' => 3,
                'quantity' => 7,
            ),
            21 => 
            array (
                'order_id' => 19,
                'product_id' => 5,
                'quantity' => 12,
            ),
            22 => 
            array (
                'order_id' => 17,
                'product_id' => 8,
                'quantity' => 2,
            ),
            23 => 
            array (
                'order_id' => 13,
                'product_id' => 6,
                'quantity' => 11,
            ),
            24 => 
            array (
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 7,
            ),
            25 => 
            array (
                'order_id' => 15,
                'product_id' => 5,
                'quantity' => 6,
            ),
            26 => 
            array (
                'order_id' => 3,
                'product_id' => 7,
                'quantity' => 3,
            ),
            27 => 
            array (
                'order_id' => 15,
                'product_id' => 4,
                'quantity' => 4,
            ),
            28 => 
            array (
                'order_id' => 7,
                'product_id' => 6,
                'quantity' => 2,
            ),
            29 => 
            array (
                'order_id' => 21,
                'product_id' => 4,
                'quantity' => 9,
            ),
            30 => 
            array (
                'order_id' => 11,
                'product_id' => 3,
                'quantity' => 3,
            ),
            31 => 
            array (
                'order_id' => 3,
                'product_id' => 8,
                'quantity' => 8,
            ),
            32 => 
            array (
                'order_id' => 20,
                'product_id' => 2,
                'quantity' => 11,
            ),
            33 => 
            array (
                'order_id' => 14,
                'product_id' => 6,
                'quantity' => 8,
            ),
            34 => 
            array (
                'order_id' => 12,
                'product_id' => 7,
                'quantity' => 10,
            ),
            35 => 
            array (
                'order_id' => 18,
                'product_id' => 6,
                'quantity' => 11,
            ),
            36 => 
            array (
                'order_id' => 4,
                'product_id' => 7,
                'quantity' => 6,
            ),
            37 => 
            array (
                'order_id' => 17,
                'product_id' => 3,
                'quantity' => 12,
            ),
            38 => 
            array (
                'order_id' => 21,
                'product_id' => 1,
                'quantity' => 2,
            ),
            39 => 
            array (
                'order_id' => 4,
                'product_id' => 2,
                'quantity' => 5,
            ),
            40 => 
            array (
                'order_id' => 21,
                'product_id' => 3,
                'quantity' => 10,
            ),
            41 => 
            array (
                'order_id' => 13,
                'product_id' => 4,
                'quantity' => 5,
            ),
            42 => 
            array (
                'order_id' => 17,
                'product_id' => 5,
                'quantity' => 10,
            ),
            43 => 
            array (
                'order_id' => 6,
                'product_id' => 2,
                'quantity' => 7,
            ),
            44 => 
            array (
                'order_id' => 5,
                'product_id' => 3,
                'quantity' => 10,
            ),
            45 => 
            array (
                'order_id' => 18,
                'product_id' => 7,
                'quantity' => 3,
            ),
            46 => 
            array (
                'order_id' => 12,
                'product_id' => 3,
                'quantity' => 5,
            ),
            47 => 
            array (
                'order_id' => 22,
                'product_id' => 8,
                'quantity' => 4,
            ),
            48 => 
            array (
                'order_id' => 15,
                'product_id' => 1,
                'quantity' => 4,
            ),
            49 => 
            array (
                'order_id' => 9,
                'product_id' => 8,
                'quantity' => 9,
            ),
            50 => 
            array (
                'order_id' => 22,
                'product_id' => 5,
                'quantity' => 2,
            ),
            51 => 
            array (
                'order_id' => 8,
                'product_id' => 6,
                'quantity' => 3,
            ),
            52 => 
            array (
                'order_id' => 14,
                'product_id' => 3,
                'quantity' => 2,
            ),
            53 => 
            array (
                'order_id' => 5,
                'product_id' => 2,
                'quantity' => 10,
            ),
            54 => 
            array (
                'order_id' => 22,
                'product_id' => 7,
                'quantity' => 9,
            ),
            55 => 
            array (
                'order_id' => 5,
                'product_id' => 4,
                'quantity' => 12,
            ),
            56 => 
            array (
                'order_id' => 3,
                'product_id' => 1,
                'quantity' => 5,
            ),
            57 => 
            array (
                'order_id' => 6,
                'product_id' => 4,
                'quantity' => 10,
            ),
            58 => 
            array (
                'order_id' => 19,
                'product_id' => 2,
                'quantity' => 12,
            ),
            59 => 
            array (
                'order_id' => 15,
                'product_id' => 2,
                'quantity' => 7,
            ),
            60 => 
            array (
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 2,
            ),
            61 => 
            array (
                'order_id' => 5,
                'product_id' => 5,
                'quantity' => 9,
            ),
            62 => 
            array (
                'order_id' => 5,
                'product_id' => 7,
                'quantity' => 6,
            ),
            63 => 
            array (
                'order_id' => 22,
                'product_id' => 7,
                'quantity' => 4,
            ),
            64 => 
            array (
                'order_id' => 20,
                'product_id' => 1,
                'quantity' => 4,
            ),
            65 => 
            array (
                'order_id' => 13,
                'product_id' => 3,
                'quantity' => 3,
            ),
            66 => 
            array (
                'order_id' => 2,
                'product_id' => 3,
                'quantity' => 10,
            ),
            67 => 
            array (
                'order_id' => 11,
                'product_id' => 7,
                'quantity' => 9,
            ),
            68 => 
            array (
                'order_id' => 8,
                'product_id' => 3,
                'quantity' => 11,
            ),
            69 => 
            array (
                'order_id' => 6,
                'product_id' => 5,
                'quantity' => 6,
            ),
            70 => 
            array (
                'order_id' => 16,
                'product_id' => 3,
                'quantity' => 4,
            ),
            71 => 
            array (
                'order_id' => 16,
                'product_id' => 2,
                'quantity' => 6,
            ),
            72 => 
            array (
                'order_id' => 10,
                'product_id' => 7,
                'quantity' => 11,
            ),
            73 => 
            array (
                'order_id' => 7,
                'product_id' => 3,
                'quantity' => 3,
            ),
            74 => 
            array (
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 7,
            ),
            75 => 
            array (
                'order_id' => 4,
                'product_id' => 2,
                'quantity' => 8,
            ),
        ));
        
        
    }
}