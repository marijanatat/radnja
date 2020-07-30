<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // majica
        for ($i=1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Majica '.$i,
                'slug' => 'majica-'.$i,
                'details' => ' majica kratkih rukava',
                'price' => rand(150, 1500),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'quantity'=>'5',
                 'category_id'=>'25',
                 'manufacturer_id'=>'1',
                
                'image' => 'products/dummy/majica-'.$i.'.jpg',
                'images' => '["products\/dummy\/majica-2.jpg","products\/dummy\/majica-3.jpg","products\/dummy\/majica-4.jpg"]',
            ]);
        }

        for ($i=1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Pantalone '.$i,
                'slug' => 'pantalone-'.$i,
                'details' => ' pantalone ',
                'price' => rand(150, 1500),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'quantity'=>'5',
                 'category_id'=>'29',
                 'manufacturer_id'=>'2',
                
                'image' => 'products/dummy/pantalone-'.$i.'.jpg',
                'images' => '["products\/dummy\/pantalone-2.jpg","products\/dummy\/pantalone-3.jpg","products\/dummy\/pantalone-4.jpg"]',
            ]);
        }

        for ($i=1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Duks '.$i,
                'slug' => 'duks-'.$i,
                'details' => ' duks dugih rukava',
                'price' => rand(150, 1500),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'quantity'=>'5',
                 'category_id'=>'26',
                 'manufacturer_id'=>'2',
                
                'image' => 'products/dummy/duks-'.$i.'.jpg',
                'images' => '["products\/dummy\/duks-2.jpg","products\/dummy\/duks-3.jpg","products\/dummy\/duks-4.jpg"]',
            ]);
        }

        for ($i=1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Haljina '.$i,
                'slug' => 'haljina-'.$i,
                'details' => 'haljina',
                'price' => rand(150, 1500),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'quantity'=>'2',
                 'category_id'=>'41',
                 'manufacturer_id'=>'2',
                
                'image' => 'products/dummy/haljina-'.$i.'.jpg',
                'images' => '["products\/dummy\/haljina-2.jpg","products\/dummy\/haljina-3.jpg","products\/dummy\/haljina-4.jpg"]',
            ]);
        }

        for ($i=1; $i <= 5; $i++) {
            Product::create([
                'name' => 'Bebi dol '.$i,
                'slug' => 'bebi-dol-'.$i,
                'details' => 'letnja pidzama',
                'price' => rand(600, 1500),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'quantity'=>'3',
                 'category_id'=>'49',
                 'manufacturer_id'=>'2',
                
                'image' => 'products/dummy/bebi_dol-'.$i.'.jpg',
                'images' => '["products\/dummy\/bebi_dol-2.jpg","products\/dummy\/bebi_dol-3.jpg","products\/dummy\/bebi_dol-4.jpg"]',
            ]);
        }
        // Make Laptop 1 a Desktop as well. Just to test multiple categories
        
    }
}