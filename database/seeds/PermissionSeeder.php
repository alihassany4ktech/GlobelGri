<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            // forntend permissions
            [
                'name' => 'create property',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete property',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],

            [
                'name' => 'edit property',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'property list',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'favorite property list',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'subscription list',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create property manager',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit property manager',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete property manager',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],

            [
                'name' => 'edit profile',
                'type' => 'FrontEnd',
                'guard_name' => 'web',
            ],

            // backend permissions
            [
                'name' => 'edit profile',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view request',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view subadmin',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'create subadmin',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit subadmin',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete subadmin',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'view frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view backend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view trashed user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'recover frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'edit frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit backend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete backend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'ban frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'unban frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'trash frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'create frontend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'create backend user',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            // (frontend and backend roles)  permissions

            [
                'name' => 'view frontend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'create frontend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit frontend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete frontend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view backend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            [
                'name' => 'create backend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit backend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete backend role',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            // (permissions) 
            [
                'name' => 'view permissions',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            // bloges permissions

            [
                'name' => 'create blog',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            // (subscriptions) permissions


            [
                'name' => 'create subscription',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit subscription',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete subscription',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view subscriptions',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'view active subscriptions',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],

            // settind permissions 
            [
                'name' => 'edit setting',
                'type' => 'BackEnd',
                'guard_name' => 'admin',
            ],



        ]);
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\User',
                'model_id' => 1,

            ],
            [
                'role_id' => 2,
                'model_type' => 'App\User',
                'model_id' => 2,

            ],
            [
                'role_id' => 3,
                'model_type' => 'App\User',
                'model_id' => 3,

            ],
            [
                'role_id' => 4,
                'model_type' => 'App\User',
                'model_id' => 4,

            ],
            [
                'role_id' => 6,
                'model_type' => 'App\User',
                'model_id' => 5,

            ],
            // admin
            [
                'role_id' => 8,
                'model_type' => 'App\Admin',
                'model_id' => 1,

            ]
        ]);
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 11,
                'role_id' => 8,
            ],
            [
                'permission_id' => 12,
                'role_id' => 8,
            ],
            [
                'permission_id' => 13,
                'role_id' => 8,
            ],
            [
                'permission_id' => 14,
                'role_id' => 8,
            ],
            [
                'permission_id' => 15,
                'role_id' => 8,
            ],
            [
                'permission_id' => 16,
                'role_id' => 8,
            ],
            [
                'permission_id' => 17,
                'role_id' => 8,
            ],
            [
                'permission_id' => 18,
                'role_id' => 8,
            ],
            [
                'permission_id' => 19,
                'role_id' => 8,
            ],
            [
                'permission_id' => 20,
                'role_id' => 8,
            ],
            [
                'permission_id' => 21,
                'role_id' => 8,
            ],
            [
                'permission_id' => 22,
                'role_id' => 8,
            ],
            [
                'permission_id' => 23,
                'role_id' => 8,
            ],
            [
                'permission_id' => 24,
                'role_id' => 8,
            ],
            [
                'permission_id' => 25,
                'role_id' => 8,
            ],
            [
                'permission_id' => 26,
                'role_id' => 8,
            ],
            [
                'permission_id' => 27,
                'role_id' => 8,
            ],
            [
                'permission_id' => 28,
                'role_id' => 8,
            ],
            [
                'permission_id' => 29,
                'role_id' => 8,
            ],
            [
                'permission_id' => 30,
                'role_id' => 8,
            ],
            [
                'permission_id' => 31,
                'role_id' => 8,
            ],
            [
                'permission_id' => 32,
                'role_id' => 8,
            ],
            [
                'permission_id' => 33,
                'role_id' => 8,
            ],
            [
                'permission_id' => 34,
                'role_id' => 8,
            ],
            [
                'permission_id' => 35,
                'role_id' => 8,
            ],
            [
                'permission_id' => 36,
                'role_id' => 8,
            ],
            [
                'permission_id' => 37,
                'role_id' => 8,
            ],
            [
                'permission_id' => 38,
                'role_id' => 8,
            ],
            [
                'permission_id' => 39,
                'role_id' => 8,
            ],
            [
                'permission_id' => 40,
                'role_id' => 8,
            ],
            [
                'permission_id' => 41,
                'role_id' => 8,
            ],
            [
                'permission_id' => 42,
                'role_id' => 8,
            ],
            [
                'permission_id' => 43,
                'role_id' => 8,
            ],
            [
                'permission_id' => 44,
                'role_id' => 8,
            ],
            [
                'permission_id' => 45,
                'role_id' => 8,
            ],

        ]);
    }
}
