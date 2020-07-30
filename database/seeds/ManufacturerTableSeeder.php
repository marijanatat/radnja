<?php

use App\Manufacturer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Manufacturer::insert([
            ['name' => 'Bambino', 'slug' => 'bambino','city'=>'pancevo', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Models kids', 'slug' => 'model-kids', 'city'=>'pancevo','created_at' => $now, 'updated_at' => $now],
            ['name' => 'Panter', 'slug' => 'panter', 'city'=>'Beograd', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Radović', 'slug' => 'radovic','city'=>'Arilje',  'created_at' => $now, 'updated_at' => $now],
           
        ]);
    }
}