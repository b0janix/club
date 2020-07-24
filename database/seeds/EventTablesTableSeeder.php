<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new DateTime('NOW');
        foreach (range(1,5) as $event_id) {
            foreach (range(1,10) as $table_id) {
                DB::table('event_tables')->insert(
                    [
                        'event_id' => $event_id,
                        'table_id' => $table_id,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );
            }
        }
    }
}
