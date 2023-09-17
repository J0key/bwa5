<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

use GuzzleHttp\Promise\Create;
use App\Models\Clubs;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
     {
        //truncate DB
        // DB::table('clubs')->truncate();

        $clubs = [
            [
                'stadiums_id' => '1',
                'name' => 'Chelsea FC',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.chelseafc.com',
                'thropy' => 19,
                'created_at' => '2023-09-16 00:00:00',
                'updated_at' => '2023-09-16 00:00:00',
            ],
            [
                'stadiums_id' => '2',
                'name' => 'Arsenal',
                'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url' => 'www.arsenal.com',
                'thropy' => 8,
                'created_at' => '2023-09-16 00:00:00',
                'updated_at' => '2023-09-16 00:00:00',
            ],
        ];

        Clubs::insert($clubs);
    }
}
