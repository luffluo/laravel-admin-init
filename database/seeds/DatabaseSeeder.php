<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
    }
}
