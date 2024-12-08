<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alternatives = [
            [
                'user_id' => 1,
                'name' => 'Dandy',
            ],
            [
                'user_id' => 1,
                'name' => 'Jake',
            ],
            [
                'user_id' => 1,
                'name' => 'Avon',
            ],
            [
                'user_id' => 1,
                'name' => 'Lexi',
            ],
            [
                'user_id' => 1,
                'name' => 'Diva',
            ],
            [
                'user_id' => 1,
                'name' => 'Mori',
            ],
            [
                'user_id' => 1,
                'name' => 'Hiro',
            ],
            [
                'user_id' => 1,
                'name' => 'Chiko',
            ],
            [
                'user_id' => 1,
                'name' => 'Mimi',
            ],
            [
                'user_id' => 1,
                'name' => 'Dea',
            ],
            [
                'user_id' => 1,
                'name' => 'Taro',
            ],
            [
                'user_id' => 1,
                'name' => 'Nobu',
            ],
            [
                'user_id' => 1,
                'name' => 'Boni',
            ],
        ];

        DB::table('alternatives')->insert($alternatives);
    }
}
