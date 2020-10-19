<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'prod_name'=>'Euro Espresso',
            'prod_price'=>13,
            'prod_quantity'=>10,
            'prod_description'=>'A traditional European style espresso blend with a prominent bitterness, a unique savory finish, and a higher caffeine content.',
            'prod_featured'=>'yes',
            'prod_discount'=>0,
            'prod_cate'=>1
        ]);
        Product::create([
            'prod_name'=>'Guatemala',
            'prod_price'=>14,
            'prod_quantity'=>10,
            'prod_description'=>'Fair-trade certified with a heavy body, mild dried berry acidity, and a marshmallow sweetness.',
            'prod_featured'=>'yes',
            'prod_discount'=>0,
            'prod_cate'=>1
        ]);
        Product::create([
            'prod_name'=>'Jamaican Island',
            'prod_price'=>13,
            'prod_quantity'=>10,
            'prod_description'=>'Smooth caramel and vanilla with notes of kahlua.',
            'prod_featured'=>'yes',
            'prod_discount'=>0,
            'prod_cate'=>1
        ]);
    }
}
