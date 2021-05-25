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
<<<<<<< HEAD
        for ($i=1; $i < 30; $i++) { 
            $textbook = new \App\Textbook([
                'title'      => 'サンプル' . $i,
                'price'     => rand(10,50) * 10,
                'author'    => '村人' . chr(mt_rand(97, 122)),
                'publisher' => '会社' . chr(mt_rand(97, 122)),
                'category'  => 'カテゴリ' . chr(mt_rand(97, 122)),
                'state'     => '状態' . chr(mt_rand(97, 122)),
            ]);
            $textbook->save();
        }
=======
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

>>>>>>> 2283cb15c13d85ecac751d69602b40a140de13f7
    }
}
