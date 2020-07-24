<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $events = [
      [
            'name' => 'Epitaph',
            'id' => 1
      ],
      [
            'name' => 'Blue Train',
            'id' => 2
      ],
      [
            'name' => 'Mother of Bebop',
            'id' => 3
      ],
      [
            'name' => 'Hancock and The Headhunters',
            'id' => 4
      ],
      [
            'name' => 'Kind of Blue',
            'id' => 5
      ]
    ];


    public function run()
    {
        $now = new DateTime('NOW');
        $faker = Faker::create();

        foreach ($this->events as $event) {
            DB::table('events')->insert(
                [
                    'event_name' => $event['name'],
                    'date' => $faker->date('Y-m-d','now'),
                    'image' => $faker->imageUrl(400, 800),
                    'artist_id' => $event['id'],
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
