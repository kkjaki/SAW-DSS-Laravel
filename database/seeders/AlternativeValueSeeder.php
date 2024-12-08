<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Dandy
            ['alternative_id' => 1, 'criteria_id' => 1, 'score' => 90], // TD
            ['alternative_id' => 1, 'criteria_id' => 2, 'score' => 86], // TW
            ['alternative_id' => 1, 'criteria_id' => 3, 'score' => 85], // TT
            ['alternative_id' => 1, 'criteria_id' => 4, 'score' => 90], // TP
            ['alternative_id' => 1, 'criteria_id' => 5, 'score' => 88], // KK
            ['alternative_id' => 1, 'criteria_id' => 6, 'score' => 94], // TM

            // Jake
            ['alternative_id' => 2, 'criteria_id' => 1, 'score' => 85],
            ['alternative_id' => 2, 'criteria_id' => 2, 'score' => 82],
            ['alternative_id' => 2, 'criteria_id' => 3, 'score' => 85],
            ['alternative_id' => 2, 'criteria_id' => 4, 'score' => 90],
            ['alternative_id' => 2, 'criteria_id' => 5, 'score' => 95],
            ['alternative_id' => 2, 'criteria_id' => 6, 'score' => 98],

            // Avon
            ['alternative_id' => 3, 'criteria_id' => 1, 'score' => 90],
            ['alternative_id' => 3, 'criteria_id' => 2, 'score' => 86],
            ['alternative_id' => 3, 'criteria_id' => 3, 'score' => 80],
            ['alternative_id' => 3, 'criteria_id' => 4, 'score' => 96],
            ['alternative_id' => 3, 'criteria_id' => 5, 'score' => 82],
            ['alternative_id' => 3, 'criteria_id' => 6, 'score' => 90],

            // Lexi
            ['alternative_id' => 4, 'criteria_id' => 1, 'score' => 85],
            ['alternative_id' => 4, 'criteria_id' => 2, 'score' => 85],
            ['alternative_id' => 4, 'criteria_id' => 3, 'score' => 80],
            ['alternative_id' => 4, 'criteria_id' => 4, 'score' => 90],
            ['alternative_id' => 4, 'criteria_id' => 5, 'score' => 90],
            ['alternative_id' => 4, 'criteria_id' => 6, 'score' => 85],

            // Diva
            ['alternative_id' => 5, 'criteria_id' => 1, 'score' => 85],
            ['alternative_id' => 5, 'criteria_id' => 2, 'score' => 80],
            ['alternative_id' => 5, 'criteria_id' => 3, 'score' => 85],
            ['alternative_id' => 5, 'criteria_id' => 4, 'score' => 90],
            ['alternative_id' => 5, 'criteria_id' => 5, 'score' => 85],
            ['alternative_id' => 5, 'criteria_id' => 6, 'score' => 98],

            // Mori
            ['alternative_id' => 6, 'criteria_id' => 1, 'score' => 94],
            ['alternative_id' => 6, 'criteria_id' => 2, 'score' => 84],
            ['alternative_id' => 6, 'criteria_id' => 3, 'score' => 80],
            ['alternative_id' => 6, 'criteria_id' => 4, 'score' => 96],
            ['alternative_id' => 6, 'criteria_id' => 5, 'score' => 79],
            ['alternative_id' => 6, 'criteria_id' => 6, 'score' => 92],

            // Hiro
            ['alternative_id' => 7, 'criteria_id' => 1, 'score' => 90],
            ['alternative_id' => 7, 'criteria_id' => 2, 'score' => 88],
            ['alternative_id' => 7, 'criteria_id' => 3, 'score' => 94],
            ['alternative_id' => 7, 'criteria_id' => 4, 'score' => 90],
            ['alternative_id' => 7, 'criteria_id' => 5, 'score' => 76],
            ['alternative_id' => 7, 'criteria_id' => 6, 'score' => 90],

            // Chiko
            ['alternative_id' => 8, 'criteria_id' => 1, 'score' => 87],
            ['alternative_id' => 8, 'criteria_id' => 2, 'score' => 87],
            ['alternative_id' => 8, 'criteria_id' => 3, 'score' => 84],
            ['alternative_id' => 8, 'criteria_id' => 4, 'score' => 96],
            ['alternative_id' => 8, 'criteria_id' => 5, 'score' => 82],
            ['alternative_id' => 8, 'criteria_id' => 6, 'score' => 92],

            // Mimi
            ['alternative_id' => 9, 'criteria_id' => 1, 'score' => 80],
            ['alternative_id' => 9, 'criteria_id' => 2, 'score' => 90],
            ['alternative_id' => 9, 'criteria_id' => 3, 'score' => 78],
            ['alternative_id' => 9, 'criteria_id' => 4, 'score' => 94],
            ['alternative_id' => 9, 'criteria_id' => 5, 'score' => 76],
            ['alternative_id' => 9, 'criteria_id' => 6, 'score' => 88],

            // Dea
            ['alternative_id' => 10, 'criteria_id' => 1, 'score' => 87],
            ['alternative_id' => 10, 'criteria_id' => 2, 'score' => 86],
            ['alternative_id' => 10, 'criteria_id' => 3, 'score' => 80],
            ['alternative_id' => 10, 'criteria_id' => 4, 'score' => 94],
            ['alternative_id' => 10, 'criteria_id' => 5, 'score' => 90],
            ['alternative_id' => 10, 'criteria_id' => 6, 'score' => 86],

            // Taro
            ['alternative_id' => 11, 'criteria_id' => 1, 'score' => 95],
            ['alternative_id' => 11, 'criteria_id' => 2, 'score' => 90],
            ['alternative_id' => 11, 'criteria_id' => 3, 'score' => 78],
            ['alternative_id' => 11, 'criteria_id' => 4, 'score' => 96],
            ['alternative_id' => 11, 'criteria_id' => 5, 'score' => 79],
            ['alternative_id' => 11, 'criteria_id' => 6, 'score' => 92],

            // Nobu
            ['alternative_id' => 12, 'criteria_id' => 1, 'score' => 79],
            ['alternative_id' => 12, 'criteria_id' => 2, 'score' => 82],
            ['alternative_id' => 12, 'criteria_id' => 3, 'score' => 94],
            ['alternative_id' => 12, 'criteria_id' => 4, 'score' => 91],
            ['alternative_id' => 12, 'criteria_id' => 5, 'score' => 86],
            ['alternative_id' => 12, 'criteria_id' => 6, 'score' => 94],

            // Boni
            ['alternative_id' => 13, 'criteria_id' => 1, 'score' => 86],
            ['alternative_id' => 13, 'criteria_id' => 2, 'score' => 92],
            ['alternative_id' => 13, 'criteria_id' => 3, 'score' => 80],
            ['alternative_id' => 13, 'criteria_id' => 4, 'score' => 98],
            ['alternative_id' => 13, 'criteria_id' => 5, 'score' => 79],
            ['alternative_id' => 13, 'criteria_id' => 6, 'score' => 84],
        ];

        // Masukkan data ke dalam tabel
        DB::table('alternativevalues')->insert($data);
    }
}
