<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ManufacturerTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SizeTableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(ProductColorsTableSeeder::class);
        $this->call(ProductSizesTableSeeder::class);
    }
}
