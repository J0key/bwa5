<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //truncate DB
        // DB::table('players')->truncate();

        $players =[
            [
                'clubs_id'=> 1,
                'photo'   => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39237.png',
                'name'    => 'Thomas',
                'height' => 147, 
                'position'=> 'kipper',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'=> 2,
                'photo'   => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39237.png',
                'name'    => 'Markus',
                'height' => 147, 
                'position'=> 'player',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],

 
        ];

        Players::insert($players);
    }
}
