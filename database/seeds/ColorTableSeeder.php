<?php

use Illuminate\Database\Seeder;
use App\Color;
use Carbon\Carbon;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Color::insert([
            ['name'=>'bela','value' => 'white', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'žuta','value' => 'yellow', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'narandžasta','value' => 'orange', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'svetlo-roze','value' => 'pink', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'roze','value' => 'hotpink', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'crvena','value' => 'red', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'bordo','value' => 'maroon', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'ljubičasta','value' => 'darkviolet', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'tirkizna','value' => 'mediumturquoise', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'svetlo-plava','value' => 'lightblue', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'plava','value' => 'blue', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'teget','value' => 'navy', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'zelena','value' => 'green', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'svetlo-zelena','value' => 'palegreen', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'braon','value' => 'brown', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'smeđa','value' => 'burlywood', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'bež','value' => 'beige', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'siva','value' => 'grey', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'crna','value' => 'black', 'created_at' => $now, 'updated_at' => $now],
        

        ]);
    }
}
