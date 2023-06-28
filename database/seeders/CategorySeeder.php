<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'キッズファッション',
                'sort_oder' => 1,
            ],
            [
                'name' => '出産祝い・ギフト',
                'sort_oder' => 2,
            ],
            [
                'name' => 'ベビーカー',
                'sort_oder' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '靴',
                'sort_oder' => 1,
                'primary_category_id' =>1
            ],
            [
                'name' => 'トップス',
                'sort_oder' => 2,
                'primary_category_id' =>1
            ],
            [
                'name' => 'バック・ランドセル',
                'sort_oder' => 3,
                'primary_category_id' =>1
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'ギフトセット',
                'sort_oder' => 4,
                'primary_category_id' =>2
            ],
            [
                'name' => 'メモリアル・記念品',
                'sort_oder' => 5,
                'primary_category_id' =>2
            ],
            [
                'name' => 'おむつケーキ',
                'sort_oder' => 6,
                'primary_category_id' =>2
            ],
        ]);
    }
}
