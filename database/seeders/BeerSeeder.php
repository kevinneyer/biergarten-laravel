<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beers = [[
            'name' => 'Budweiser' ,
            'brewery' => 'AB Inbev',
            'img_url' => 'https://delpapadistributing.com/wp-content/uploads/2018/09/budweiser_pair_02.png',
            'style' => 'Lager',
            'abv' => 5.0,
            'description' => 'Medium bodied, flavorful, crisp lager brewed with the best barley malt and blend of premium hop varieties.',
            'tasting_notes' => 'Crisp taste with a smooth finish.',
            'likes' => 10,
            'recommended_drinking' => 'Perfect for all year drinking, grilling, and baseball games.'
        ],
        [
            'name' => 'Miller High Life',
            'brewery' => 'Miller Brewing Co',
            'img_url' => 'https://dydza6t6xitx6.cloudfront.net/ci-miller-high-life-1c0b560ccca972a0.jpeg',
            'style' => 'Lager', 
            'abv' => 4.6,
            'description' => 'True to its original recipe, it’s brewed with a proprietary blend of malted barley, Galena hops from the Pacific Northwest, and Miller yeast.',
            'tasting_notes' => 'Crisp, refreshing, and effervescent ',
            'likes' => 5, 
            'recommended_drinking' => 'summertime drinking.'
        ],
        [
            'name' => 'Pabst Blue Ribbon',
            'brewery' => 'Pabst Brewing Company',
            'img_url' => 'https://pabstblueribbon.com/files/pbr-org_1-768x922.png',
            'style' => 'Lager',
            'abv' => 4.8,
            'description' => 'A smooth, full bodied beer with a clean, crisp finish with a fine noble hop aroma.',
            'tasting_notes' => 'Grain, corn',
            'likes' => 4,
            'recommended_drinking' => 'Always good for all the time.'
        ],[
            'name' => 'Fat Tire',
            'brewery' => 'New Belgium', 
            'img_url' => 'https://products1.imgix.drizly.com/ci-new-belgium-fat-tire-b4e1817093500c47.jpeg?auto=format%2Ccompress&fm=jpg&q=20',
            'style' => 'Amber Ale',
            'abv' =>  5.2,
            'description' => 'Easy drinking amber ale with a medium body and light, sweet finish.', 
            'tasting_notes' => 'Toasty malt, gentle sweetness, and a flash of fresh hop bitterness',
            'likes' => 7,
            'recommended_drinking' => 'Camping and outdoor activities'
        ],[
            'name' => 'VooDoo Ranger',
            'brewery' => 'New Belgium',
            'img_url' => 'https://www.newbelgium.com/globalassets/beer/voodoo-ranger/vripa_2019_globe_btl.png',
            'style' => 'IPA',
            'abv' => 7.0 ,
            'description' => 'Bursting with tropical aromas and juicy fruit flavors from Mosaic and Amarillo hops, this golden IPA is perfectly bitter with a refreshing, sublime finish.',
            'tasting_notes' => 'Lightly sweet at first with a stronger, building and perfect bitterness.',
            'likes' => 11,
            'recommended_drinking' => 'Grilling, outdoor activities'
        ],
        [
            'name' => 'Two Hearted Ale',
            'brewery' => 'Bells Brewery', 
            'img_url' => 'https://cdn.shopify.com/s/files/1/0227/0581/products/Bells-Two-Hearted-Ale-12OZ-CAN_620x.JPG?v=1587397438',
            'style' => 'IPA',
            'abv' => 7.0,
            'description' => 'Bursting with hop aromas ranging from pine to grapefruit from massive hop additions in both the kettle and the fermenter.',
            'tasting_notes' => 'Bitter Citrus Pine', 
            'likes' => 7,
            'recommended_drinking' => 'Remarkably drinkable and well suited for adventures everywhere.'
        ]];

        foreach( $beers as $beer ) {
            DB::table('beers')->insert($beer);
        }
    }
}
