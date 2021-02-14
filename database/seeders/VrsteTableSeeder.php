<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VrsteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vrstas')->insert(
            [
                ['naziv' => 'Hladjenje'],
                ['naziv' => 'Pranje i Sušenje']
            ]
        );
    }
}
