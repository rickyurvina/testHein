<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('bonuses')->delete();

        \DB::table('bonuses')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'worker_id' => '1',
                    'bonus_amount' => '5000',
                    'bonus_date' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            1 =>
                array(
                    'id' => '2',
                    'worker_id' => '2',
                    'bonus_amount' => '3000',
                    'bonus_date' => '2016-06-11 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            2 =>
                array(
                    'id' => '3',
                    'worker_id' => '3',
                    'bonus_amount' => '4000',
                    'bonus_date' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            3 =>
                array(
                    'id' => '4',
                    'worker_id' => '1',
                    'bonus_amount' => '4500',
                    'bonus_date' => '2016-02-20 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            4 =>
                array(
                    'id' => '5',
                    'worker_id' => '2',
                    'bonus_amount' => '3500',
                    'bonus_date' => '2016-06-11 00:00:00',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
        ));
    }
}
