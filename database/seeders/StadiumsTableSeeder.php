<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class StadiumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //truncate DB
        // DB::table('stadiums')->truncate();

        $stadiums =[
            [
                'name' => 'Standford Bridge',
                'capacity' => 40000,
                'address' => "Stamford Bridges, Fulham Road"
            ],
            [
                'name' => 'Emirates Stadium',
                'capacity' => 60000,
                'address' => "Highbury House, 75 Dayton Park"
            ]

        ];

        Stadiums::insert($stadiums);
    }
}
