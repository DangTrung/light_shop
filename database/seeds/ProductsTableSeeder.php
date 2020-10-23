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
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>1
        ]);
        Product::create([
            'prod_name'=>'Jamaican Island',
            'prod_price'=>13,
            'prod_quantity'=>10,
            'prod_description'=>'Smooth caramel and vanilla with notes of kahlua.',
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>1
        ]);
        Product::create([
            'prod_name'=>'French Roast',
            'prod_price'=>18,
            'prod_quantity'=>10,
            'prod_description'=>"The signature taste and rich coffee character of French Roast comes from a longer, hotter roast, which not all beans can handle.",
            'prod_featured'=>'yes',
            'prod_discount'=>0,
            'prod_cate'=>2
        ]);
        Product::create([
            'prod_name'=>'Holiday Blend',
            'prod_price'=>19,
            'prod_quantity'=>10,
            'prod_description'=>"Holiday Blend is a tradition as exciting for us as it is for the loyal drinkers that ardently await each year’s installment.",
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>2
        ]);
        Product::create([
            'prod_name'=>'Uzuri Blend',
            'prod_price'=>19,
            'prod_quantity'=>10,
            'prod_description'=>"In fact, it was the farmers who gave this truly sustainable, distinctly African blend its name, Uzuri—which is Swahili for beautiful or excellent.",
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>2
        ]);
        Product::create([
            'prod_name'=>'Project X',
            'prod_price'=>15,
            'prod_quantity'=>10,
            'prod_description'=>"We partnered with Hogsalt to develop this proprietary blend, typically only available at Hogsalt locations like Sawada Coffee, Doughnut Vault, and CC Ferns.",
            'prod_featured'=>'yes',
            'prod_discount'=>0,
            'prod_cate'=>3
        ]);
        Product::create([
            'prod_name'=>'CJB Blend',
            'prod_price'=>15,
            'prod_quantity'=>10,
            'prod_description'=>"Comprised of seasonal Fair Trade and Organic certified coffees from Central and South America, Cafe Jumping Bean Blend is smooth and sweet like milk chocolate with a pop of tropical citrus fruit on the finish.",
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>3
        ]);
        Product::create([
            'prod_name'=>'Yolk Roast',
            'prod_price'=>15,
            'prod_quantity'=>10,
            'prod_description'=>"Yolk Roast Coffee is a far cry from your ordinary breakfast blend. We developed this exclusive blend of Ethiopian coffees specifically for our partners at Yolk.",
            'prod_featured'=>'no',
            'prod_discount'=>0,
            'prod_cate'=>3
        ]);
    }
}
