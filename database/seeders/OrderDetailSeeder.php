<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderdetail = OrderDetail::create([
            'quantiteplt' => 250,
            'order_id'=> 1,
            'product_id'=> 1,
        ]);
    }
}
