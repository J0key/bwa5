<?php

namespace Database\Seeders;

use App\Models\Matchs;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class MatchsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //truncate DB
        // DB::table('matchs')->truncate();

        $matchs =[
            [
                'clubs_id'=> 1,
                'rivals_id'=> 2,
                'schedule'=> '2021-08-08 00:00:00',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'=> 2,
                'rivals_id'=> 1,
                'schedule'=> '2021-08-08 00:00:00',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],


        ];

        Matchs::insert($matchs);
    }
}
