<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_tiers')->insert([
            ['tier_name' => 'S'],['tier_name' => '1군'],['tier_name' => '2A'],['tier_name' => '2B'],
            ['tier_name' => '2C'],['tier_name' => '2D'],['tier_name' => '2E'],['tier_name' => '3군'],['tier_name' => '미배정'],
        ]);
    }
}
