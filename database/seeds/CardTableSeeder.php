<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('')->insert([
			'name','quantity'
        ]);
    }
}
