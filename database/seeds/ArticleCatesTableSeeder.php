<?php

use App\ArticleCate;
use Illuminate\Database\Seeder;

class ArticleCatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCate::create([
            'cate_name'=>'COFFEE'
        ]);
        ArticleCate::create([
            'cate_name'=>'TECHNOLOGY'
        ]);
        ArticleCate::create([
            'cate_name'=>'LIFESTYLE'
        ]);
        ArticleCate::create([
            'cate_name'=>'BEAUTY'
        ]);
        ArticleCate::create([
            'cate_name'=>'BUSINESS'
        ]);
    }
}
