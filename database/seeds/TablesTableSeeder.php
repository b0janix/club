<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $table_names = [
      'Table 1',
      'Table 2',
      'Table 3',
      'Table 4',
      'Table 5',
      'Table 6',
      'Table 7',
      'Table 8',
      'Table 9',
      'Table 10'
    ];

    public function run()
    {
        $now = new DateTime('NOW');
        foreach ($this->table_names as $name) {
            DB::table('tables')->insert(
                [
                    'table_name' => $name,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
        }
    }
}
