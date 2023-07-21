<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@hanako.jp',
            'age' => 34,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@sachiko.jp',
            'age' => 56,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'a',
            'mail' => 'a@sample.jp',
            'age' => 10,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'ab',
            'mail' => 'ab@sample.jp',
            'age' => 9,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'c',
            'mail' => 'c@sample.jp',
            'age' => 8,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'd',
            'mail' => 'd@sample.jp',
            'age' => 7,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'e',
            'mail' => 'e@sample.jp',
            'age' => 6,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'f',
            'mail' => 'f@sample.jp',
            'age' => 5,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'g',
            'mail' => 'g@sample.jp',
            'age' => 4,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'h',
            'mail' => 'h@sample.jp',
            'age' => 3,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'i',
            'mail' => 'ai@sample.jp',
            'age' => 2,
        ];

        DB::table('people')->insert($param);

        $param = [
            'name' => 'j',
            'mail' => 'j@sample.jp',
            'age' => 1,
        ];

        DB::table('people')->insert($param);
    }
}
