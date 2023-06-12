<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0;$i<50;$i++){
            Article::create([
                'ma_bviet' => $i+1,
                'tieude' => $faker->sentences(30,true),
                'ten_bhat' => $faker->sentences(10,true),
                'ma_tloai' => $faker->numberBetween(0,50),
                'tomtat' =>$faker->paragraph(1,true),
                'noidung' =>$faker->paragraph(3,true),
                'ma_tgia' => $faker->numberBetween(0,50),
                'hinhanh' => $faker->imageUrl(200,200,'peoples,true')
            ]);
        }
    }
}
