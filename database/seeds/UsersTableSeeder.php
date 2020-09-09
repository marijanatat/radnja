<?php

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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'bane@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yrlE12liE0q2Az.SlpGkDeiBYjXErgIwxTTuLWHbux/oSaGTsm.FG',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-06 12:34:47',
                'updated_at' => '2020-09-09 15:12:27',
            ),
        ));
        
        
    }
}