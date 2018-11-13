<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class childrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('children')->insert([
            'lastName' => '山田',
            'firstName' => '太朗',
            'sex' => 1,
            'birthday' => new DateTime('2018-10-23 20:48:00'),
            'motherLastName' => '山田',
            'motherFirstName' => '花子',
            'fatherLastName' => '山田',
            'fatherFirstName' => '源蔵',
            'height' => 47,
            'weight' => 2410,
            'chestSize' => 30,
            'headSize' => 33,
            'hospital' => '',
            'weather' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
