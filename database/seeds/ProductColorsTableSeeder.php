<?php

use App\ProductColor;
use Illuminate\Database\Seeder;

use Carbon\Carbon;


class ProductColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        ProductColor::insert([
            ['product_id'=>1,'color_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>1,'color_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>1,'color_id' =>3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>2,'color_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>2,'color_id' =>5 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'color_id' =>1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'color_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'color_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>12,'color_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'color_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'color_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'color_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>16,'color_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'color_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'color_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>17,'color_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'color_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'color_id' =>2 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'color_id' =>3, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>21,'color_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>25,'color_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'color_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'color_id' =>3 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>3,'color_id' =>4 , 'created_at' => $now, 'updated_at' => $now],
            ['product_id'=>4,'color_id' =>1 , 'created_at' => $now, 'updated_at' => $now],
        
        

        ]);
    }
}
