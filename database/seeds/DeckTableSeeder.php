<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('')->insert([
			'name','commander','partner','format','list'
        ]);
    }
}
