<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('titles')->delete();

        \DB::table('titles')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'worker_id' => '1',
                    'worker_title' => 'Manager',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            1 =>
                array(
                    'id' => '2',
                    'worker_id' => '2',
                    'worker_title' => 'Executive',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            2 =>
                array(
                    'id' => '3',
                    'worker_id' => '8',
                    'worker_title' => 'Executive',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            3 =>
                array(
                    'id' => '4',
                    'worker_id' => '5',
                    'worker_title' => 'Manager',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            4 =>
                array(
                    'id' => '5',
                    'worker_id' => '4',
                    'worker_title' => 'Asst. Manager',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            5 =>
                array(
                    'id' => '6',
                    'worker_id' => '7',
                    'worker_title' => 'Executive',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            6 =>
                array(
                    'id' => '7',
                    'worker_id' => '6',
                    'worker_title' => 'Lead',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            7 =>
                array(
                    'id' => '8',
                    'worker_id' => '3',
                    'worker_title' => 'Lead',
                    'affected_from' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
        ));
    }
}
