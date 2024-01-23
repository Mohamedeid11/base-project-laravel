<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();

        app()['cache']->forget('spatie.permission.cache');

        $adminRole  =  Role::create(['guard_name' => 'admin','name' => 'admin']);

        $adminPermissions = [

            // users
            'admins.read',
            'admins.create',
            'admins.edit',
            'admins.delete',

            // roles
            'roles.read',
            'roles.create',
            'roles.edit',
            'roles.delete',


            //colors
            'colors.read',
            'colors.create',
            'colors.edit',
            'colors.delete',

            //sliders
            'sliders.read',
            'sliders.create',
            'sliders.edit',
            'sliders.delete',

            //pages
            'pages.read',
            'pages.create',
            'pages.edit',
            'pages.delete',

            //cities
            'cities.read',
            'cities.create',
            'cities.edit',
            'cities.delete',

            //districts
            'districts.read',
            'districts.create',
            'districts.edit',
            'districts.delete',

            //users
            'users.read',
            'users.create',
            'users.edit',
            'users.delete',

            //contact
            'contact.read',
            'contact.show',

            //push_notification
            'push_notification.read',
            'push_notification.create',
            'push_notification.delete',

            //settings
            'setting.read',
            // 'setting.create',
            'setting.edit',
            // 'setting.delete',

        ];

        foreach ($adminPermissions as $permission) {
            Permission::firstOrCreate(['guard_name' => 'admin','name' => $permission]);
        }
        $adminRole->givePermissionTo($adminPermissions);
        $admin = Admin::find(1);
        if($admin){
            $admin->assignRole('admin');
        }

    }

}
