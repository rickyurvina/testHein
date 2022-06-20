<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('workers')->delete();

        \DB::table('workers')->insert(array(
            0 =>
                array(
                    'id' => '1',
                    'worker_id' => '001',
                    'first_name' => 'Monika',
                    'last_name' => 'Arora',
                    'salary' => '100000',
                    'department' => 'HR',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            1 =>
                array(
                    'id' => '2',
                    'worker_id' => '002',
                    'first_name' => 'Niharika',
                    'last_name' => 'Verma',
                    'salary' => '80000',
                    'department' => 'Admin',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            2 =>
                array(
                    'id' => '3',
                    'worker_id' => '003',
                    'first_name' => 'Vishal',
                    'last_name' => 'Singhal',
                    'salary' => '300000',
                    'department' => 'HR',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            3 =>
                array(
                    'id' => '4',
                    'worker_id' => '004',
                    'first_name' => 'Amitabh',
                    'last_name' => 'Singh',
                    'salary' => '100000',
                    'department' => 'HR',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            4 =>
                array(
                    'id' => '5',
                    'worker_id' => '005',
                    'first_name' => 'Vivek',
                    'last_name' => 'Bhati',
                    'salary' => '500000',
                    'department' => 'Admin',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            5 =>
                array(
                    'id' => '6',
                    'worker_id' => '006',
                    'first_name' => 'Vipul',
                    'last_name' => 'Diwan',
                    'salary' => '200000',
                    'department' => 'Account',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            6 =>
                array(
                    'id' => '7',
                    'worker_id' => '007',
                    'first_name' => 'Satish',
                    'last_name' => 'Kumar',
                    'salary' => '75000',
                    'department' => 'Account',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
            7 =>
                array(
                    'id' => '8',
                    'worker_id' => '008',
                    'first_name' => 'Geetika',
                    'last_name' => 'Chauhan',
                    'salary' => '90000',
                    'department' => 'Admin',
                    'created_at' => now(),
                    'updated_at' => now()
                ),
        ));
    }
}
