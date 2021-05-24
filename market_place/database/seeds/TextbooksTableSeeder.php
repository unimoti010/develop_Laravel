<?php

use Illuminate\Database\Seeder;

class TextbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            $textbook = new \App\Textbook([
                'title' => 'サンプル商品' . $i,
                'price' => rand(10, 50) * 100,
                'author' => 'サンプル太郎',
                'publisher' => 'サンプル出版',
                'category' => 'サンプルカテゴリ',
                'state' => '新品同様'
            ]);
            $textbook->save();
        }

        // DB::table('textbooks')->insert(['title' => 'IT入門']);
        // DB::table('textbooks')->insert(['title' => '古典入門']);
        // DB::table('textbooks')->insert(['title' => '世界史入門']);
        // DB::table('textbooks')->insert(['title' => '人類学入門']);
        // DB::table('textbooks')->insert(['title' => '英文学入門']);
        // DB::table('textbooks')->insert(['title' => '数学入門']);
        // DB::table('textbooks')->insert(['title' => '栄養学入門']);

    }
}
