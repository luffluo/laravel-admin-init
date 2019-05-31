<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$LMpxEHpnz0qQTa0MumeWY./hV90ZTVe7ayMJphVsWV.qT8bO7uOK6',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-05-31 09:24:16',
                'updated_at' => '2019-05-31 09:24:16',
            ),
        ));
        
        
    }
}
