<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 30; $i++) { 
            $textbook = new \App\User([
                'name'      => '村人' . $i,
                'address'     => 'サンプル' . chr(mt_rand(97, 122)),
                'tel'    => rand(0,9),
                'email' => chr(mt_rand(97, 122)) .chr(mt_rand(97, 122)) . '@' . chr(mt_rand(97, 122)) . '.com',
                'password'  => chr(mt_rand(97, 122)),
            ]);
            $textbook->save();
        }
    }
}
