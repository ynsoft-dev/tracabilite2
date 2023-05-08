<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpatieRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('spatie_roles')->delete();

        \DB::table('spatie_roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Admin',
                'guard_name' => 'web',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'User-Prod',
                'guard_name' => 'web',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'User-Exped',
                'guard_name' => 'web',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Admin-Prod',
                'guard_name' => 'web',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Admin-Exped',
                'guard_name' => 'web',
            ),
        ));


    }
}
