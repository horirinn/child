<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SucklesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 00:00:00',
            'endTime' => '2018-11-22 00:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 01:00:00',
            'endTime' => '2018-11-22 01:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 02:00:00',
            'endTime' => '2018-11-22 02:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 03:00:00',
            'endTime' => '2018-11-22 03:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 04:00:00',
            'endTime' => '2018-11-22 04:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 05:00:00',
            'endTime' => '2018-11-22 05:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 06:00:00',
            'endTime' => '2018-11-22 06:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 07:00:00',
            'endTime' => '2018-11-22 07:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 08:00:00',
            'endTime' => '2018-11-22 08:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('suckles')->insert([
            'childId' => 1,
            'startTime' => '2018-11-22 09:00:00',
            'endTime' => '2018-11-22 09:15:00',
            'amount' => '100',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
