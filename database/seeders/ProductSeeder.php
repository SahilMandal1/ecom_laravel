<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>"Oppo",
                'price'=>"15000",
                'category'=>"mobile",
                "description"=>"A mobile with 8gb RAM and much more features!",
                "gallery"=>"https://th.bing.com/th/id/OIP.606MbJkXSoYLsuBkRka7wgHaHa?pid=ImgDet&rs=1"
            ],
            [
                'name'=>"Apple",
                'price'=>"155000",
                'category'=>"mobile",
                "description"=>"This phone is looking very cool and trending in the market",
                "gallery"=>"https://i5.walmartimages.com/asr/c154b1a6-e1c0-4e20-afb3-a15513aee725.158bd82849fe24b6b34a1f7ad1445204.jpeg"
            ],
            [
                'name'=>"Vivo",
                'price'=>"19000",
                'category'=>"mobile",
                "description"=>"Vivo new smartphone having RAM 12gb with high speed processor",
                "gallery"=>"https://images.priceoye.pk/vivo-y11-2019-pakistan-priceoye-id660.jpg"
            ],
            [
                'name'=>"MI TV 4A",
                'price'=>"67000",
                'category'=>"Television",
                "description"=>"Full HD display TV at your budget and having amazing features!",
                "gallery"=>"https://assets.mspimages.in/gear/Mi_LED_TV_4A_32__Front.png"
            ],
            [
                'name'=>"Samsung TV",
                'price'=>"90000",
                'category'=>"Television",
                "description"=>"Amazing Tv with much more functionality!",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/91DmIujXGSL.jpg"
            ],
            [
                'name'=>"Acer Laptop",
                'price'=>"85000",
                'category'=>"Laptop",
                "description"=>"Acer Laptop with 8gb Ram and high speed i5 processor!",
                "gallery"=>"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6302/6302401_sd.jpg"
            ]
        ]);
    }
}
