<?php

use Illuminate\Database\Seeder;
use App\ProductSize;
use Carbon\Carbon;


class ProductSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        ProductSize::insert([
            ['product_id'=>1,'size_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>1,'size_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>1,'size_id' =>3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>2,'size_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>2,'size_id' =>5 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'size_id' =>1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'size_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'size_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'size_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'size_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'size_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'size_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'size_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'size_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'size_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'size_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'size_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'size_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'size_id' =>3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'size_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>25,'size_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'size_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'size_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'size_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>4,'size_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
        

        ]);
    }
}
