<?php

namespace Database\Seeders;

use App\Models\Kabkota;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsiIds = Province::pluck('id')->toArray();

        $kotaData = [
            ['province_id' => $provinsiIds[array_rand($provinsiIds)], 'name' => 'Bandung'],
            ['province_id' => $provinsiIds[array_rand($provinsiIds)], 'name' => 'Surabaya'],
            ['province_id' => $provinsiIds[array_rand($provinsiIds)], 'name' => 'Semarang'],
        ];

        Kabkota::insert($kotaData);
    }
}
