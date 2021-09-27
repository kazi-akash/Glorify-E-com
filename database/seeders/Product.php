<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            ['name'=> 'BenQ PD3200U',
            'price'=> '934.42',
            'description'=>'+4K resolution on a massive 32-inch Ultra HD display
+Great for 3D designers as well as gaming, 32-inch Ultra HD display, as part of its Designer Monitor range.'
            ,
            'category'=> 'monitor',
            'gallery'=> 'https://cdn.mos.cms.futurecdn.net/XMKzZ8rzSLMdkEjQVf6n2G-970-80.jpg.webp'],
            [
                'name'=> 'LG UltraGear 38GN950',
                'price'=> '1868',
                'description'=>'+Super-responsive and smooth with its 160Hz refresh rate and 1ms response time
                +Many great gaming-centric features makes it worth the price, 160Hz, 1ms response time, spectacular image quality'
                ,
                'category'=> 'monitor',
                'gallery'=> 'https://cdn.mos.cms.futurecdn.net/wnR5Zirbb5HxxhHRws7Wp7-970-80.jpg.webp'
            ],
            [
                'name'=> 'Asus ROG Swift PG27UQ',
                'price'=> '3655.33',
                'description'=>'+HDR 1000 is well implemented
                +Beautiful image quality great for gaming as well as other media consumption, It doesn’t just feature a 4K UHD display at 144Hz, but it also rocks Nvidia G-Sync and HDR. '
                ,
                'category'=> 'mobile',
                'gallery'=> 'https://cdn.mos.cms.futurecdn.net/2GW8B49cwUs42C6Aqo5pnF-970-80.jpg.webp'
            ]

        ]
    );
    }
}
