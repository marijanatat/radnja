<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-08-06 12:33:42',
                'updated_at' => '2020-08-06 12:33:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-08-06 12:33:42',
                'updated_at' => '2020-08-06 12:33:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-08-06 12:33:42',
                'updated_at' => '2020-08-06 12:33:42',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'products',
                'slug' => 'products',
                'display_name_singular' => 'Proizvod',
                'display_name_plural' => 'Proizvodi',
                'icon' => 'voyager-bag',
                'model_name' => 'App\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-06 12:39:26',
                'updated_at' => '2020-08-25 19:01:51',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'orders',
                'slug' => 'orders',
                'display_name_singular' => 'Narudžbina',
                'display_name_plural' => 'Narudžbine',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Order',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:29:19',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'order_product',
                'slug' => 'order-product',
                'display_name_singular' => 'Naručeni proizvodi',
                'display_name_plural' => 'Naručeni proizvodi',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\OrderProduct',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'sizes',
                'slug' => 'sizes',
                'display_name_singular' => 'Veličina',
                'display_name_plural' => 'Veličine',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Size',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'colors',
                'slug' => 'colors',
                'display_name_singular' => 'Boja',
                'display_name_plural' => 'Boje',
                'icon' => 'voyager-paint-bucket',
                'model_name' => 'App\\Color',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Kategorija',
                'display_name_plural' => 'Kategorije',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-25 09:43:08',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'manufacturers',
                'slug' => 'manufacturers',
                'display_name_singular' => 'Manufacturer',
                'display_name_plural' => 'Manufacturers',
                'icon' => 'voyager-shop',
                'model_name' => 'App\\Manufacturer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:41:01',
            ),
        ));
        
        
    }
}