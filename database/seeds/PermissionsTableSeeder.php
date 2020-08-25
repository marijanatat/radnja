<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-08-06 14:52:10',
                'updated_at' => '2020-08-06 14:52:10',
            ),
            30 => 
            array (
                'id' => 41,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:18:52',
            ),
            31 => 
            array (
                'id' => 42,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:18:52',
            ),
            32 => 
            array (
                'id' => 43,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:18:52',
            ),
            33 => 
            array (
                'id' => 44,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:18:52',
            ),
            34 => 
            array (
                'id' => 45,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2020-08-19 10:18:52',
                'updated_at' => '2020-08-19 10:18:52',
            ),
            35 => 
            array (
                'id' => 51,
                'key' => 'browse_order_product',
                'table_name' => 'order_product',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            36 => 
            array (
                'id' => 52,
                'key' => 'read_order_product',
                'table_name' => 'order_product',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            37 => 
            array (
                'id' => 53,
                'key' => 'edit_order_product',
                'table_name' => 'order_product',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            38 => 
            array (
                'id' => 54,
                'key' => 'add_order_product',
                'table_name' => 'order_product',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            39 => 
            array (
                'id' => 55,
                'key' => 'delete_order_product',
                'table_name' => 'order_product',
                'created_at' => '2020-08-19 10:34:04',
                'updated_at' => '2020-08-19 10:34:04',
            ),
            40 => 
            array (
                'id' => 56,
                'key' => 'browse_sizes',
                'table_name' => 'sizes',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            41 => 
            array (
                'id' => 57,
                'key' => 'read_sizes',
                'table_name' => 'sizes',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            42 => 
            array (
                'id' => 58,
                'key' => 'edit_sizes',
                'table_name' => 'sizes',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            43 => 
            array (
                'id' => 59,
                'key' => 'add_sizes',
                'table_name' => 'sizes',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            44 => 
            array (
                'id' => 60,
                'key' => 'delete_sizes',
                'table_name' => 'sizes',
                'created_at' => '2020-08-19 10:49:18',
                'updated_at' => '2020-08-19 10:49:18',
            ),
            45 => 
            array (
                'id' => 61,
                'key' => 'browse_colors',
                'table_name' => 'colors',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            46 => 
            array (
                'id' => 62,
                'key' => 'read_colors',
                'table_name' => 'colors',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            47 => 
            array (
                'id' => 63,
                'key' => 'edit_colors',
                'table_name' => 'colors',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            48 => 
            array (
                'id' => 64,
                'key' => 'add_colors',
                'table_name' => 'colors',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            49 => 
            array (
                'id' => 65,
                'key' => 'delete_colors',
                'table_name' => 'colors',
                'created_at' => '2020-08-19 10:50:22',
                'updated_at' => '2020-08-19 10:50:22',
            ),
            50 => 
            array (
                'id' => 66,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-19 10:53:57',
            ),
            51 => 
            array (
                'id' => 67,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-19 10:53:57',
            ),
            52 => 
            array (
                'id' => 68,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-19 10:53:57',
            ),
            53 => 
            array (
                'id' => 69,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-19 10:53:57',
            ),
            54 => 
            array (
                'id' => 70,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-19 10:53:57',
                'updated_at' => '2020-08-19 10:53:57',
            ),
            55 => 
            array (
                'id' => 71,
                'key' => 'browse_manufacturers',
                'table_name' => 'manufacturers',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:39:59',
            ),
            56 => 
            array (
                'id' => 72,
                'key' => 'read_manufacturers',
                'table_name' => 'manufacturers',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:39:59',
            ),
            57 => 
            array (
                'id' => 73,
                'key' => 'edit_manufacturers',
                'table_name' => 'manufacturers',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:39:59',
            ),
            58 => 
            array (
                'id' => 74,
                'key' => 'add_manufacturers',
                'table_name' => 'manufacturers',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:39:59',
            ),
            59 => 
            array (
                'id' => 75,
                'key' => 'delete_manufacturers',
                'table_name' => 'manufacturers',
                'created_at' => '2020-08-25 20:39:59',
                'updated_at' => '2020-08-25 20:39:59',
            ),
        ));
        
        
    }
}