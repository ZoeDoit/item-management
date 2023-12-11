<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'type_name' => 'その他',
            ],
            [
                'type_name' => '観光',
            ],
            [
                'type_name' => '体験',
            ],
            [
                'type_name' => '芸術',
            ],
            [
                'type_name' => '歴史',
            ],
            [
                'type_name' => '自然',
            ],
            [
                'type_name' => '食事',
            ],
            [
                'type_name' => '買い物',
            ],
            [
                'type_name' => '宿泊',
            ],
            [
                'type_name' => '温泉',
            ],
            [
                'type_name' => 'アミューズメント',
            ],
            [
                'type_name' => '博物館',
            ],
            [
                'type_name' => 'イベント・お祭り',
            ],
        ]);
    }
}
