<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bebe',
                'slug' => 'bebe',
                '_lft' => 1,
                '_rgt' => 50,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:20:58',
                'updated_at' => '2020-08-21 06:20:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Seke',
                'slug' => 'bebe-seke',
                '_lft' => 2,
                '_rgt' => 17,
                'parent_id' => 1,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bodići',
                'slug' => 'bebe-seke-bodići',
                '_lft' => 3,
                '_rgt' => 4,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Zeke',
                'slug' => 'bebe-seke-zeke',
                '_lft' => 5,
                '_rgt' => 6,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bebi setovi',
                'slug' => 'bebe-seke-bebi-setovi',
                '_lft' => 7,
                '_rgt' => 8,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bebi kompletići',
                'slug' => 'bebe-seke-bebi-kompletići',
                '_lft' => 9,
                '_rgt' => 10,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Benkice',
                'slug' => 'bebe-seke-benkice',
                '_lft' => 11,
                '_rgt' => 12,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Helanke',
                'slug' => 'bebe-seke-helanke',
                '_lft' => 13,
                '_rgt' => 14,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Haljinice',
                'slug' => 'bebe-seke-haljinice',
                '_lft' => 15,
                '_rgt' => 16,
                'parent_id' => 2,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bate',
                'slug' => 'bebe-bate',
                '_lft' => 18,
                '_rgt' => 31,
                'parent_id' => 1,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bodići',
                'slug' => 'bebe-bate-bodići',
                '_lft' => 19,
                '_rgt' => 20,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Zeke',
                'slug' => 'bebe-bate-zeke',
                '_lft' => 21,
                '_rgt' => 22,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Bebi setovi',
                'slug' => 'bebe-bate-bebi-setovi',
                '_lft' => 23,
                '_rgt' => 24,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Bebi kompletići',
                'slug' => 'bebe-bate-bebi-kompletići',
                '_lft' => 25,
                '_rgt' => 26,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Duksevi',
                'slug' => 'bebe-bate-duksevi',
                '_lft' => 27,
                '_rgt' => 28,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Tregerice',
                'slug' => 'bebe-bate-tregierice',
                '_lft' => 29,
                '_rgt' => 30,
                'parent_id' => 10,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Ostalo',
                'slug' => 'bebe-ostalo',
                '_lft' => 32,
                '_rgt' => 49,
                'parent_id' => 1,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Peškiri',
                'slug' => 'bebe-ostalo-peškiri',
                '_lft' => 33,
                '_rgt' => 34,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Podloge',
                'slug' => 'bebe-ostalo-podloge',
                '_lft' => 35,
                '_rgt' => 36,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Portikle',
                'slug' => 'bebe-ostalo-portikle',
                '_lft' => 37,
                '_rgt' => 38,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Šeširi',
                'slug' => 'bebe-ostalo-šeširi',
                '_lft' => 39,
                '_rgt' => 40,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Trake',
                'slug' => 'bebe-ostalo-trake',
                '_lft' => 41,
                '_rgt' => 42,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Čarape',
                'slug' => 'bebe-ostalo-čarape',
                '_lft' => 43,
                '_rgt' => 44,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Pelene',
                'slug' => 'bebe-ostalo-pelene',
                '_lft' => 45,
                '_rgt' => 46,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Nehodajuće cipele',
                'slug' => 'bebe-ostalo-nehodajuće-cipele',
                '_lft' => 47,
                '_rgt' => 48,
                'parent_id' => 17,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Dečaci',
                'slug' => 'dečaci',
                '_lft' => 51,
                '_rgt' => 84,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Moda',
                'slug' => 'dečaci-moda',
                '_lft' => 52,
                '_rgt' => 69,
                'parent_id' => 26,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Majice',
                'slug' => 'dečaci-moda-majice',
                '_lft' => 53,
                '_rgt' => 54,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Duksevi',
                'slug' => 'dečaci-moda-duksevi',
                '_lft' => 55,
                '_rgt' => 56,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:20:59',
                'updated_at' => '2020-08-21 06:20:59',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Džemperi',
                'slug' => 'dečaci-moda-džemperi',
                '_lft' => 57,
                '_rgt' => 58,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Trenerke kompleti',
                'slug' => 'dečaci-moda-trenerke-kompleti',
                '_lft' => 59,
                '_rgt' => 60,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Donji deo trenerke',
                'slug' => 'dečaci-moda-donji-deo-trenerke',
                '_lft' => 61,
                '_rgt' => 62,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Pantalone',
                'slug' => 'dečaci-moda-pantalone',
                '_lft' => 63,
                '_rgt' => 64,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Šorcevi',
                'slug' => 'dečaci-moda-šorcevi',
                '_lft' => 65,
                '_rgt' => 66,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Jakne',
                'slug' => 'dečaci-moda-jakne',
                '_lft' => 67,
                '_rgt' => 68,
                'parent_id' => 27,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Veš',
                'slug' => 'dečaci-veš',
                '_lft' => 70,
                '_rgt' => 83,
                'parent_id' => 26,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Gaće',
                'slug' => 'dečaci-veš-gaće',
                '_lft' => 71,
                '_rgt' => 72,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Bokserice',
                'slug' => 'dečaci-veš-bokserice',
                '_lft' => 73,
                '_rgt' => 74,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Potkošulje',
                'slug' => 'dečaci-veš-potkošulje',
                '_lft' => 75,
                '_rgt' => 76,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Čarape',
                'slug' => 'dečaci-veš-čarape',
                '_lft' => 77,
                '_rgt' => 78,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Pidžame',
                'slug' => 'dečaci-veš-pidžame',
                '_lft' => 79,
                '_rgt' => 80,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Bade mantili',
                'slug' => 'dečaci-veš-bade-mantili',
                '_lft' => 81,
                '_rgt' => 82,
                'parent_id' => 36,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Devojčice',
                'slug' => 'devojčice',
                '_lft' => 85,
                '_rgt' => 122,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Moda',
                'slug' => 'devojčice-moda',
                '_lft' => 86,
                '_rgt' => 105,
                'parent_id' => 43,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Majice',
                'slug' => 'devojčice-moda-majice',
                '_lft' => 87,
                '_rgt' => 88,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Haljine',
                'slug' => 'devojčice-moda-haljine',
                '_lft' => 89,
                '_rgt' => 90,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Suknje',
                'slug' => 'devojčice-moda-suknje',
                '_lft' => 91,
                '_rgt' => 92,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Helanke',
                'slug' => 'devojčice-moda-helanke',
                '_lft' => 93,
                '_rgt' => 94,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Pantalone',
                'slug' => 'devojčice-moda-pantalone',
                '_lft' => 95,
                '_rgt' => 96,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Trenerke',
                'slug' => 'devojčice-moda-trenerke',
                '_lft' => 97,
                '_rgt' => 98,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Jakne',
                'slug' => 'devojčice-moda-jakne',
                '_lft' => 99,
                '_rgt' => 100,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Džemperi',
                'slug' => 'devojčice-moda-džemperi',
                '_lft' => 101,
                '_rgt' => 102,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Duksevi',
                'slug' => 'devojčice-moda-duksevi',
                '_lft' => 103,
                '_rgt' => 104,
                'parent_id' => 44,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Veš',
                'slug' => 'devojčice-veš',
                '_lft' => 106,
                '_rgt' => 121,
                'parent_id' => 43,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Gaće',
                'slug' => 'devojčice-veš-gaće',
                '_lft' => 107,
                '_rgt' => 108,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Bebi-dol',
                'slug' => 'devojčice-veš-bebi-dol',
                '_lft' => 109,
                '_rgt' => 110,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:00',
                'updated_at' => '2020-08-21 06:21:00',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Pidžame',
                'slug' => 'devojčice-veš-pidžame',
                '_lft' => 111,
                '_rgt' => 112,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Spavaćice',
                'slug' => 'devojčice-veš-spavaćice',
                '_lft' => 113,
                '_rgt' => 114,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Potkošulje',
                'slug' => 'devojčice-veš-potkošulje',
                '_lft' => 115,
                '_rgt' => 116,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Čarape',
                'slug' => 'devojčice-veš-čarape',
                '_lft' => 117,
                '_rgt' => 118,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Bade manitili',
                'slug' => 'devojčice-veš-bade-mantili',
                '_lft' => 119,
                '_rgt' => 120,
                'parent_id' => 54,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Muškarci',
                'slug' => 'muškarci',
                '_lft' => 123,
                '_rgt' => 148,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Moda',
                'slug' => 'muškarci-moda',
                '_lft' => 124,
                '_rgt' => 137,
                'parent_id' => 62,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Pantalone',
                'slug' => 'muškarci-moda-pantalone',
                '_lft' => 125,
                '_rgt' => 126,
                'parent_id' => 63,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Majice',
                'slug' => 'muškarci-moda-majice',
                '_lft' => 127,
                '_rgt' => 128,
                'parent_id' => 63,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Trenerke',
                'slug' => 'muškarci-moda-trenerke',
                '_lft' => 129,
                '_rgt' => 130,
                'parent_id' => 63,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Duksevi',
                'slug' => 'muškarci-moda-duksevi',
                '_lft' => 131,
                '_rgt' => 132,
                'parent_id' => 63,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Šorcevi',
                'slug' => 'muškarci-moda-šorcevi',
                '_lft' => 133,
                '_rgt' => 134,
                'parent_id' => 63,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Veš',
                'slug' => 'muškarci-veš',
                '_lft' => 138,
                '_rgt' => 147,
                'parent_id' => 62,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Potkošulje',
                'slug' => 'muškarci-veš-potkošulje',
                '_lft' => 139,
                '_rgt' => 140,
                'parent_id' => 69,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Čarape',
                'slug' => 'muškarci-veš-čarape',
                '_lft' => 141,
                '_rgt' => 142,
                'parent_id' => 69,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Gaće',
                'slug' => 'muškarci-veš-gaće',
                '_lft' => 143,
                '_rgt' => 144,
                'parent_id' => 69,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Pidžame',
                'slug' => 'muškarci-veš-pidžame',
                '_lft' => 145,
                '_rgt' => 146,
                'parent_id' => 69,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Žene',
                'slug' => 'žene',
                '_lft' => 149,
                '_rgt' => 178,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Moda',
                'slug' => 'žene-moda',
                '_lft' => 150,
                '_rgt' => 165,
                'parent_id' => 74,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Pantalone',
                'slug' => 'žene-moda-pantalone',
                '_lft' => 151,
                '_rgt' => 152,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Majice',
                'slug' => 'žene-moda-majice',
                '_lft' => 153,
                '_rgt' => 154,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Trenerke',
                'slug' => 'žene-moda-trenerke',
                '_lft' => 155,
                '_rgt' => 156,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Suknje',
                'slug' => 'žene-moda-suknje',
                '_lft' => 157,
                '_rgt' => 158,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Helanke',
                'slug' => 'žene-moda-helanke',
                '_lft' => 159,
                '_rgt' => 160,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Haljine',
                'slug' => 'žene-moda-haljine',
                '_lft' => 161,
                '_rgt' => 162,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Šorcevi',
                'slug' => 'žene-moda-šorcevi',
                '_lft' => 163,
                '_rgt' => 164,
                'parent_id' => 75,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Veš',
                'slug' => 'žene-veš',
                '_lft' => 166,
                '_rgt' => 177,
                'parent_id' => 74,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Potkošulje',
                'slug' => 'žene-veš-potkošulje',
                '_lft' => 167,
                '_rgt' => 168,
                'parent_id' => 83,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Čarape',
                'slug' => 'žene-veš-čarape',
                '_lft' => 169,
                '_rgt' => 170,
                'parent_id' => 83,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Gaće',
                'slug' => 'žene-veš-gaće',
                '_lft' => 171,
                '_rgt' => 172,
                'parent_id' => 83,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Brushalteri',
                'slug' => 'žene-veš-brushalteri',
                '_lft' => 173,
                '_rgt' => 174,
                'parent_id' => 83,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Pidžame',
                'slug' => 'pidžame',
                '_lft' => 175,
                '_rgt' => 176,
                'parent_id' => 83,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Aksesoar',
                'slug' => 'aksesoar',
                '_lft' => 179,
                '_rgt' => 188,
                'parent_id' => NULL,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Tekstil',
                'slug' => 'aksesoar-tekstil',
                '_lft' => 180,
                '_rgt' => 187,
                'parent_id' => 89,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Peškiri',
                'slug' => 'aksesoar-peškiri',
                '_lft' => 181,
                '_rgt' => 182,
                'parent_id' => 90,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Posteljina',
                'slug' => 'aksesoar-posteljina',
                '_lft' => 183,
                '_rgt' => 184,
                'parent_id' => 90,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Krpe',
                'slug' => 'aksesoar-krpe',
                '_lft' => 185,
                '_rgt' => 186,
                'parent_id' => 90,
                'created_at' => '2020-08-21 06:21:01',
                'updated_at' => '2020-08-21 06:21:01',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Džemperi',
                'slug' => 'muškarci-moda-džemperi',
                '_lft' => 135,
                '_rgt' => 136,
                'parent_id' => 63,
                'created_at' => '2020-08-25 06:19:02',
                'updated_at' => '2020-08-25 06:19:02',
            ),
        ));
        
        
    }
}