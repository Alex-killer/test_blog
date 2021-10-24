<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ # создаем двух пользователей
            [
                'name'    => 'Автор не известен',
                'email'   => 'autor_unknown@g.g',
                'password'=> bcrypt(str::random(16)), # получить хэш пароля
            ],
            [
                'name'    => 'Автор',
                'email'   => 'authorl@g.g',
                'password'=> bcrypt(123123),
            ],
        ];

        \DB::table('users')->insert($data);
    }
}
