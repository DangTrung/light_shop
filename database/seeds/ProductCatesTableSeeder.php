<?php

use App\ProductCate;
use Illuminate\Database\Seeder;

class ProductCatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCate::create([
            'cate_name'=>'GOAT'
        ]);
        ProductCate::create([
            'cate_name'=>"PEET'S"
        ]);
        ProductCate::create([
            'cate_name'=>'METROPOLIS'
        ]);
    }
}
