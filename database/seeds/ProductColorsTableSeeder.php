<?php

use Illuminate\Database\Seeder;

class ProductColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_colors')->delete();
        
        \DB::table('product_colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'color_id' => 4,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 2,
                'color_id' => 5,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 12,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 12,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 12,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 12,
                'color_id' => 4,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 16,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 16,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 16,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 16,
                'color_id' => 4,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 17,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 17,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 17,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 21,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 21,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 21,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 21,
                'color_id' => 4,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 25,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 3,
                'color_id' => 2,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 3,
                'color_id' => 3,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 3,
                'color_id' => 4,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 4,
                'color_id' => 1,
                'created_at' => '2020-08-20 12:26:39',
                'updated_at' => '2020-08-20 12:26:39',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 38,
                'color_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 38,
                'color_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 38,
                'color_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 37,
                'color_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 37,
                'color_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 37,
                'color_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 36,
                'color_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 36,
                'color_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 36,
                'color_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 36,
                'color_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 35,
                'color_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 35,
                'color_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 34,
                'color_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 32,
                'color_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 32,
                'color_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 31,
                'color_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 30,
                'color_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 30,
                'color_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 29,
                'color_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 28,
                'color_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 28,
                'color_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 28,
                'color_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 27,
                'color_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 27,
                'color_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 39,
                'color_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 39,
                'color_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 40,
                'color_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 40,
                'color_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 41,
                'color_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 42,
                'color_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 43,
                'color_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 44,
                'color_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 45,
                'color_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 45,
                'color_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 46,
                'color_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 47,
                'color_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 47,
                'color_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 48,
                'color_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 48,
                'color_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}