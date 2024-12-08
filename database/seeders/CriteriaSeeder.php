<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria = [
            [
                'user_id' => 1,
                'name' => 'Tes Desain Project',
                'attribute' => 'benefit',
                'weight' => 25,
            ],
            [
                'user_id' => 1,
                'name' => 'Tes Wawancara',
                'attribute' => 'benefit',
                'weight' => 10,
            ],
            [
                'user_id' => 1,
                'name' => 'Tes Tertulis',
                'attribute' => 'benefit',
                'weight' => 10,
            ],
            [
                'user_id' => 1,
                'name' => 'Tes Psikologi',
                'attribute' => 'benefit',
                'weight' => 10,
            ],
            [
                'user_id' => 1,
                'name' => 'Kemampuan Kreativitas',
                'attribute' => 'benefit',
                'weight' => 25,
            ],
            [
                'user_id' => 1,
                'name' => 'Tes Manajemen Kerja',
                'attribute' => 'benefit',
                'weight' => 20,
            ],
        ];

        DB::table('criteria')->insert($criteria);
    }
}
