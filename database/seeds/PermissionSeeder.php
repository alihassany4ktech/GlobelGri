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
        // DB::table('role_has_permissions')->insert([
        //     [
        //         'permission_id' => 1,
        //         'role_id' => 1,
        //     ],
        //     [
        //         'permission_id' => 4,
        //         'role_id' => 2,
        //     ],
        //     [
        //         'permission_id' => 3,
        //         'role_id' => 3,
        //     ],
        //     [
        //         'permission_id' => 7,
        //         'role_id' => 4,
        //     ],
        //     [
        //         'permission_id' => 6,
        //         'role_id' => 5,
        //     ],
        //     [
        //         'permission_id' => 5,
        //         'role_id' => 6,
        //     ],
        //     [
        //         'permission_id' => 7,
        //         'role_id' => 7,
        //     ],
        //     [
        //         'permission_id' => 2,
        //         'role_id' => 7,
        //     ],
        //     [
        //         'permission_id' => 1,
        //         'role_id' => 8,
        //     ],
        // ]);
    }
}
