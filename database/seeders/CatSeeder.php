<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' =>'Good',
            
        ]);
        DB::table('categories')->insert([
            'name' =>'Batter',
            
        ]);
        DB::table('categories')->insert([
            'name' =>'Best',
            
        ]);
    }
}
