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
            8 => 
            array (
                'id' => 9,
                'name' => 'Inpro',
                'slug' => 'inpro',
                'city' => 'Arilje',
                'created_at' => '2020-08-28 11:53:53',
                'updated_at' => '2020-08-28 11:53:53',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Jasmil',
                'slug' => 'jasmil',
                'city' => 'Arilje',
                'created_at' => '2020-08-28 11:56:39',
                'updated_at' => '2020-08-28 11:56:39',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Fashion Story',
                'slug' => 'fashion-story',
                'city' => 'Trnava',
                'created_at' => '2020-08-28 11:58:04',
                'updated_at' => '2020-08-28 11:58:04',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Lotos',
                'slug' => 'lotos',
                'city' => 'Arilje',
                'created_at' => '2020-08-28 12:00:40',
                'updated_at' => '2020-08-28 12:00:40',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Boa',
                'slug' => 'boa',
                'city' => 'Arilje',
                'created_at' => '2020-08-28 12:16:00',
                'updated_at' => '2020-08-28 12:16:00',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Amibo',
                'slug' => 'amibo',
                'city' => 'Arilje',
                'created_at' => '2020-09-02 20:04:24',
                'updated_at' => '2020-09-02 20:04:24',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Falcon',
                'slug' => 'falcon',
                'city' => 'Prijepolje',
                'created_at' => '2020-09-02 20:16:51',
                'updated_at' => '2020-09-02 20:16:51',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Ewox',
                'slug' => 'ewox',
                'city' => 'Užice',
                'created_at' => '2020-09-02 20:19:20',
                'updated_at' => '2020-09-02 20:19:20',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'San Tex',
                'slug' => 'san-tex',
                'city' => 'Arilje',
                'created_at' => '2020-09-02 20:39:16',
                'updated_at' => '2020-09-02 20:39:16',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Briliant',
                'slug' => 'briliant',
                'city' => 'Novi Pazar',
                'created_at' => '2020-09-02 21:10:20',
                'updated_at' => '2020-09-02 21:10:20',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Model',
                'slug' => 'model',
                'city' => 'Pančevo',
                'created_at' => '2020-09-02 21:45:02',
                'updated_at' => '2020-09-02 21:45:02',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Wolf',
                'slug' => 'wolf',
                'city' => 'Beograd',
                'created_at' => '2020-09-03 07:59:57',
                'updated_at' => '2020-09-03 07:59:57',
            ),
        ));
        
        
    }
}