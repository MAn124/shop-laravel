<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=> '',
            'price'=>'',
            'desc'=>'',
            'category'=>'',
            'image'=>''
          ]);
    }
}
