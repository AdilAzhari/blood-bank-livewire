<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view-role',
            'create-role',
            'update-role',
            'delete-role',
            'viewAny-role',
            'restore-role',
            'forceDelete-role',

            'view-permission',
            'create-permission',
            'update-permission',
            'delete-permission',
            'viewAny-permission',
            'restore-permission',
            'forceDelete-permission',

            'view-city',
            'create-city',
            'update-city',
            'delete-city',
            'viewAny-city',
            'restore-city',
            'forceDelete-city',

            'view-user',
            'create-user',
            'update-user',
            'delete-user',
            'viewAny-user',
            'restore-user',
            'forceDelete-user',

            'view-client',
            'delete-client',
            'viewAny-client',
            'restore-client',
            'forceDelete-client',

            'view-post',
            'delete-post',
            'viewAny-post',
            'restore-post',
            'forceDelete-post',

            'view-bloodType',
            'create-bloodType',
            'viewAny-bloodType',

            'view-Donation',
            'delete-Donation',
            'viewAny-Donation',
            'restore-Donation',
            'forceDelete-Donation',

            'view-category',
            'create-category',
            'update-category',
            'delete-category',
            'viewAny-category',
            'restore-category',
            'forceDelete-category',

            'view-governorate',
            'create-governorate',
            'update-governorate',
            'delete-governorate',
            'viewAny-governorate',
            'restore-governorate',
            'forceDelete-governorate',

            'view-setting',
            'create-setting',
            'update-setting',
            'delete-setting',
            'viewAny-setting',
            'restore-setting',
            'forceDelete-setting',

            'view-contact',
            'create-contact',
            'update-contact',
            'delete-contact',
            'viewAny-contact',
            'restore-contact',
            'forceDelete-contact',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
