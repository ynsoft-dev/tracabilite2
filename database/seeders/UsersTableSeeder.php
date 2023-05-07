<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('adminadmin'),
                'remember_token' => NULL,
                'created_at' => '2023-05-07 10:57:11',
                'updated_at' => '2023-05-07 10:57:11',
                'deleted_at' => NULL,
            ),
        ));


    }
}
