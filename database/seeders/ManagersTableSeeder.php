<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //truncate DB
        // DB::table('managers')->truncate();

        $managers =[
            [
                'clubs_id'=> 1,
                'photo'   => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man39237.png',
                'name'    => 'Thomas Tuchel',
                'old'=> '47',
                'nationality' => 'Germany',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'=> 2,
                'photo'   => 'https://resources.premierleague.com/premierleague/
                photos/players/250x250/man51018.png',
                'name'    => 'Mikel Arteta',
                'old'=> '38',
                'nationality' => 'Spain',
                'created_at' =>  '2021-03-21 00:00:00',
                'updated_at' => '2021-03-21 00:00:00',
                ],
             
            ];

        Managers::insert($managers);
    }
}
