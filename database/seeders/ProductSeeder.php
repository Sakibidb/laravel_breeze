<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     *  Run the database seeds.id	name	description	image	tags	price	catagory_id	availability	created_at	updated_at	

     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' =>'Akib',
            'description' =>'Student is good',
            'image' =>'image/no_photo.jpg',
            'tags' =>'no tag',
            'price' =>'100',
            'catagory_id' =>'1',
            'availability' =>'1',
        ]);
        DB::table('products')->insert([
            'name' =>'sakib',
            'description' =>'Student is better',
            'image' =>'image/no_photo.jpg',
            'tags' =>'no tag',
            'price' =>'200',
            'catagory_id' =>'2',
            'availability' =>'1',
        ]);
        DB::table('products')->insert([
            'name' =>'Rakib',
            'description' =>'Student is best',
            'image' =>'image/no_photo.jpg',
            'tags' =>'no tag',
            'price' =>'20',
            'catagory_id' =>'3',
            'availability' =>'1',
        ]);
    }
}
