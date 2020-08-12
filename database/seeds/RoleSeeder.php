<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'assignRoles',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'canBeGivenAccess',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'manageRoles',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'manageUsers',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'viewNova',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'viewRoles',
        ]);

        DB::table('role_permission')->insert([
            'role_id' => '1',
            'permission_slug' => 'viewUsers',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '2',
        ]);
    }
}
