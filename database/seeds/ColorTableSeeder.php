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
            ['name'=>'red','value' => '#FF0000', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'white','value' => '#ffffff', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'lightblue','value' => '#ADD8E6', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'blue','value' => '#0000FF', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'pink','value' => 'CCFFCC', 'created_at' => $now, 'updated_at' => $now],
            ['name'=>'rose','value' => '#ffcccc', 'created_at' => $now, 'updated_at' => $now],
        

        ]);
    }
}
