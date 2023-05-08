<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-update',
            'user-delete',
            'role-list',
            'role-create',
            'role-update',
            'role-delete',
            'product-list',
            'product-create',
            'product-update',
            'product-delete',
            'order-list',
            'order-create',
            'order-update',
            'order-delete',
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
