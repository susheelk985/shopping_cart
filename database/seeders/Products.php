<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' =>"Redmi not 7 pro",
            "category_id" => "2",
            "description" => "More pixels, unbeatable detailing. The Redmi Note 7 Pro features a 48MP Sony IMX586 camera sensor, that comes with 4 times the pixels of a typical 12MP smartphone camera resulting in a resolution that is nothing short of astounding.",
            "image" => "uploads/products/redmi_note_7_pro.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 14500,
            'special_price' => 13999
        ]);

        DB::table('products')->insert([
            'name' =>"Realme 11 5g",
            "category_id" => "2",
            "description" => "Rear Camera. 108MP 3× Zoom Camera. Pixel: 108MP. Focal Length: 23.6mm. FOV: 83.6°. Aperture: f/1.75. Lens: 6P. 2MP Portrait Camera. Pixel: 2MP.",
            "image" => "uploads/products/realme_11_5g.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 17899,
            'special_price' => 14500
        ]);

        DB::table('products')->insert([
            'name' =>"iPhone 12 pro",
            "category_id" => "2",
            "description" => "Apple iPhone 12 Pro smartphone. Announced Oct 2020. Features 6.1″ display, Apple A14 Bionic chipset, 2815 mAh battery, 512 GB storage, 6 GB RAM",
            "image" => "uploads/products/iphone_12pro.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 35425,
            'special_price' => 29500
        ]);

        DB::table('products')->insert([
            'name' =>"MacBook Pro",
            "category_id" => "1",
            "description" => "MacBook Pro with M3, M3 Pro and M3 Max chips. Up to 22 hours of battery life. The world's best laptop display. ",
            "image" => "uploads/products/apple_lap.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 45750,
            'special_price' => 43750
        ]);
        DB::table('products')->insert([
            'name' =>"Inspiron 14 Laptop",
            "category_id" => "1",
            "description" => "AMD Ryzen™ 5 7530U 6-core/12-thread Processor with Radeon",
            "image" => "uploads/products/dell_lap.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 39900,
            'special_price' => 36500
        ]);

        DB::table('products')->insert([
            'name' =>"HP Pavilion 35.6 cm Laptop 14-dv2014TU - Silver",
            "category_id" => "1",
            "description" => "12th Generation Intel® Core™ i5 processor,Windows 11 Home, 35.6 cm (14) diagonal display Brightview with Intel® Iris® Xᵉ Graphics",
            "image" => "uploads/products/hp_lap.jpeg",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'price' => 45230,
            'special_price' => 41999
        ]);
    }
}
