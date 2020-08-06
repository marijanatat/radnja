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
                'password' => '$2y$10$XmIppRjiHB3adOh6iV0KL.frBJMDxsxIcG5XqAyYyTokcCM8z7qYi',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-06 12:34:47',
                'updated_at' => '2020-08-06 12:34:47',
            ),
        ));
        
        
    }
}