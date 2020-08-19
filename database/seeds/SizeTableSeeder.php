<?php

use App\Size;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Size::insert([
            ['value' => '1', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '2', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '4', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '6', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '8', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '10', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '12', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '14', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '15', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '56', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '62', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '68', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '74',  'created_at' => $now, 'updated_at' => $now],
            ['value' => '80',  'created_at' => $now, 'updated_at' => $now],
            ['value' => '86', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '92', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '98', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '104', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '110', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '116', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '122', 'created_at' => $now, 'updated_at' => $now],
            ['value' => '128', 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}