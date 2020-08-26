<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('manufacturers')->delete();
        
        \DB::table('manufacturers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bambino',
                'slug' => 'bambino',
                'city' => 'Pančevo',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Model kids',
                'slug' => 'model-kids',
                'city' => 'Pančevo',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Panter',
                'slug' => 'panter',
                'city' => 'Beograd',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Radović',
                'slug' => 'radovic',
                'city' => 'Arilje',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kid Star',
                'slug' => 'kid-star',
                'city' => 'Niš',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sloga MB',
                'slug' => 'sloga-mb',
                'city' => 'Ivanjica',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Hajdi',
                'slug' => 'hajdi',
                'city' => 'Aleksinac',
                'created_at' => '2020-08-25 14:30:44',
                'updated_at' => '2020-08-25 14:30:44',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'CDM',
                'slug' => 'cdm',
                'city' => 'Arilje',
                'created_at' => '2020-08-25 20:43:40',
                'updated_at' => '2020-08-25 20:43:40',
            ),
        ));
        
        
    }
}