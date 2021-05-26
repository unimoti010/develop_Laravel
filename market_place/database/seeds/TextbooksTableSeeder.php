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
    }
}
