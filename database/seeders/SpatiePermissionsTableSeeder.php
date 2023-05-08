<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpatiePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('spatie_permissions')->delete();

        \DB::table('spatie_permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'a',
                'guard_name' => 'a',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'role-list',
                'guard_name' => 'web',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'role-create',
                'guard_name' => 'web',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'role-update',
                'guard_name' => 'web',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'role-delete',
                'guard_name' => 'web',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'user-list',
                'guard_name' => 'web',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'user-create',
                'guard_name' => 'web',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'user-update',
                'guard_name' => 'web',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'user-delete',
                'guard_name' => 'web',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'structure-list',
                'guard_name' => 'web',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'structure-create',
                'guard_name' => 'web',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'structure-update',
                'guard_name' => 'web',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'structure-delete',
                'guard_name' => 'web',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'line-list',
                'guard_name' => 'web',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'line-create',
                'guard_name' => 'web',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'line-update',
                'guard_name' => 'web',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'line-delete',
                'guard_name' => 'web',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'product-list',
                'guard_name' => 'web',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'product-create',
                'guard_name' => 'web',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'product-update',
                'guard_name' => 'web',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'product-delete',
                'guard_name' => 'web',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'order-list',
                'guard_name' => 'web',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'order-create',
                'guard_name' => 'web',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'order-update',
                'guard_name' => 'web',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'order-delete',
                'guard_name' => 'web',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'customer-list',
                'guard_name' => 'web',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'customer-create',
                'guard_name' => 'web',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'customer-update',
                'guard_name' => 'web',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'customer-delete',
                'guard_name' => 'web',
            ),
        ));


    }
}
