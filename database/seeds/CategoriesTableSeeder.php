<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                'name' => 'Bebe',
                'slug'=>'bebe',
                    'children' => [
                        [    
                            'name' => 'Seke',
                            'slug'=>'seke',
                            'children' => [
                                    ['name' => 'Bodići',  'slug'=>'bodići'],
                                    ['name' => 'Zeke','slug'=>'zeke'],
                                    ['name' => 'Bebi setovi','slug'=>'bebi-setovi'],
                                    ['name' => 'Bebi kompletici','slug'=>'bebi-kompletići'],
                                    ['name' => 'Benkice','slug'=>'benkice'],
                                    ['name' => 'Helanke','slug'=>'helanke'],
                                    ['name' => 'Haljinice','slug'=>'haljinice'],
                                   
                            ],
                        ],
                        [    
                            'name' => 'Bate',
                            'slug'=>'bate',
                                'children' => [
                                    ['name' => 'Bodici','slug'=>'bodići'],
                                    ['name' => 'Zeke','slug'=>'zeke'],
                                    ['name' => 'Bebi setovi','slug'=>'bebi-setovi'],
                                    ['name' => 'Bebi kompletici','slug'=>'bebi-kompletići'],
                                    ['name' => 'Duksevi','slug'=>'duksevi'],
                                    ['name' => 'Tregerice','slug'=>'tregierice'],
                                   
                            ],
                        ],
                        [    
                            'name' => 'Ostalo',
                            'slug'=>'ostalo',
                            'children' => [
                                    ['name' => 'Peškiri','slug'=>'peškiri'],
                                    ['name' => 'Podloge','slug'=>'podloge'],
                                    ['name' => 'Portikle','slug'=>'portikle'],
                                    ['name' => 'Šeširi','slug'=>'šeširi'],
                                    ['name' => 'Trake','slug'=>'trake'],
                                    ['name' => 'Čarape','slug'=>'čarape'],
                                    ['name' => 'Pelene','slug'=>'pelene'],
                                    ['name' => 'Nehodajuce cipele','slug'=>'nehodajuce-cipele'],
                            ],
                        ],
                    ],
                ],

               //decaci

               [
                'name' => 'Dečaci',
                'slug'=>'dečaci',
                    'children' => [
                        [    
                            'name' => 'Moda',
                            'slug'=>'moda',
                            'children' => [
                                    ['name' => 'Majice',  'slug'=>'majice'],
                                    ['name' => 'Duksevi','slug'=>'duksevi'],
                                    ['name' => 'Džemperi','slug'=>'džemperi'],
                                    ['name' => 'Trenerke kompleti','slug'=>'trenerke-kompleti'],
                                    ['name' => 'Donji deo trenerke','slug'=>'donji-deo-trenerke'],
                                    ['name' => 'Pantalone','slug'=>'pantalone'],
                                    ['name' => 'Šorcevi','slug'=>'šorcevi'],
                                    ['name' => 'Jakne','slug'=>'jakne'],
                                   
                            ],
                        ],
                        [    
                            'name' => 'Veš',
                            'slug'=>'veš',
                                'children' => [
                                    ['name' => 'Gaće','slug'=>'gaće'],
                                    ['name' => 'Bokserice','slug'=>'bokserice'],
                                    ['name' => 'Potkošulja','slug'=>'potkošulja'],
                                    ['name' => 'Čarape','slug'=>'čarape'],
                                    ['name' => 'Pidžama','slug'=>'pidžama'],
                                    ['name' => 'Bade manitili','slug'=>'bade-mantili'],
                                   
                            ],
                        ],
                    ],
                ],
            

                //devojcice

                [
                    'name' => 'Devojčice',
                    'slug'=>'devojčice',
                        'children' => [
                            [    
                                'name' => 'Moda',
                                'slug'=>'moda',
                                'children' => [
                                        ['name' => 'Majice',  'slug'=>'majice'],
                                        ['name' => 'Haljine','slug'=>'haljine'],
                                        ['name' => 'Suknje','slug'=>'suknje'],
                                        ['name' => 'Helanke','slug'=>'helanke'],
                                        ['name' => 'Pantalone','slug'=>'pantalone'],
                                        ['name' => 'Trenerke','slug'=>'trenerke'],
                                        ['name' => 'Jakne','slug'=>'jakne'],
                                        ['name' => 'Džemperi','slug'=>'džemperi'],
                                        ['name' => 'Duksevi','slug'=>'duksevi'],
                                        
                                       
                                ],
                            ],
                            [    
                                'name' => 'Veš',
                                'slug'=>'veš',
                                    'children' => [
                                        ['name' => 'Gaće','slug'=>'gaće'],
                                        ['name' => 'Bebi-dol','slug'=>'bebi-dol'],
                                        ['name' => 'Pidžama','slug'=>'pidžama'],
                                        ['name' => 'Spavaćica','slug'=>'spavaćica'],
                                        ['name' => 'Potkošulja','slug'=>'potkošulja'],
                                        ['name' => 'Čarape','slug'=>'čarape'],
                                        ['name' => 'Bade manitili','slug'=>'bade-mantili'],
                                ],
                            ],
                        ],
                    ],
                   

                    //mukarci
            

            [
                'name' => 'Muškarci',
                'slug'=>'muškarci',
                    'children' => [
                        [    
                            'name' => 'Moda',
                            'slug'=>'moda',
                            'children' => [
                                    ['name' => 'Pantalone','slug'=>'pantalone'],
                                    ['name' => 'Majice','slug'=>'majice'],
                                    ['name' => 'Trenerke','slug'=>'trenerke'],
                                    ['name' => 'Duksevi','slug'=>'duksevi'],
                                    ['name' => 'Šorcevi','slug'=>'šorcevi'],
                                    
                            ],
                        ],
                        [    
                            'name' => 'Veš',
                            'slug'=>'veš',
                                'children' => [
                                    ['name' => 'Potkošulje','slug'=>'potkošulje'],
                                    ['name' => 'Čarape','slug'=>'čarape'],
                                    ['name' => 'Gaće','slug'=>'gaće'],
                                    ['name' => 'Čarape','slug'=>'čarape'],
                            ],
                        ],
                    ],
                ],

                [
                    'name' => 'Žene',
                    'slug'=>'žene',
                        'children' => [
                            [    
                                'name' => 'Moda',
                                'slug'=>'moda',
                                'children' => [
                                        ['name' => 'Pantalone','slug'=>'pantalone'],
                                        ['name' => 'Majice','slug'=>'majice'],
                                        ['name' => 'Trenerke','slug'=>'trenerke'],
                                        ['name' => 'Suknje','slug'=>'suknje'],
                                        ['name' => 'Helanke','slug'=>'helanke'],
                                        ['name' => 'Haljine','slug'=>'haljine'],
                                        ['name' => 'Šorcevi','slug'=>'šorcevi'],
                                        
                                ],
                            ],
                            [    
                                'name' => 'Veš',
                                'slug'=>'veš',
                                    'children' => [
                                        ['name' => 'Potkošulje','slug'=>'potkošulje'],
                                        ['name' => 'Čarape','slug'=>'čarape'],
                                        ['name' => 'Gaće','slug'=>'gaće'],
                                        ['name' => 'Brushalteri','slug'=>'brushalteri'],
                                        ['name' => 'Čarape','slug'=>'čarape'],
                                ],
                            ],
                        ],
                    ],

                    [
                        'name' => 'Aksesoar',
                        'slug'=>'aksesoar',
                            'children' => [
                                [    
                                    'name' => 'Tekstil',
                                    'slug'=>'tekstil',
                                    'children' => [
                                            ['name' => 'Peškiri','slug'=>'peškiri'],
                                            ['name' => 'Posteljina','slug'=>'posteljina'],
                                            ['name' => 'Krpe','slug'=>'krpe'],
                                           
                                    ],
                                ],
                              
                            ],
                        ],
            

            //
            ];

            foreach($categories as $category){
                Category::create($category);
            }


    }
}
