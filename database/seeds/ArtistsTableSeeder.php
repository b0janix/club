<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $jazz_musicians = [
      'Charles Mingus',
      'John Coltrane',
      'Mary Lou Williams',
      'Herbie Hancock',
      'Miles Davis'
    ];

    public function run()
    {
        $now = new DateTime('NOW');
        foreach ($this->jazz_musicians as $jazz_musician) {
            DB::table('artists')->insert(
                [
                    'artist_name' => $jazz_musician,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
