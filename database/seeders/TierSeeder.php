<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiers')->insert([
            ['starcraft_name' => '3040-zofflvhsldk','tier' => '1','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-개빈','tier' => '1','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-SKT','tier' => '2','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-CHOBO','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-SOL','tier' => '2','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-DAELIM','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-gogh','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Camel','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Open','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-December','tier' => '2','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Jeja','tier' => '2','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Nova','tier' => '2','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-hangbae','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-MIN-GU','tier' => '3','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Deck','tier' => '3','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-KCC','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-dokdo','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-vivi','tier' => '3','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Bakryuk','tier' => '3','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Daebang','tier' => '3','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-studyhard','tier' => '3','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Shy','tier' => '3','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Eunpa','tier' => '3','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Zombie','tier' => '3','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-MyFAM','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Cat','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Ord','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Mustang','tier' => '3','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-90ton','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-mint','tier' => '4','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-BaeUk','tier' => '4','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Taeil','tier' => '4','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-Bisu','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-GD','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-SkaNS','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ddocong','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-MuRuk','tier' => '4','starcraft_race' => 'Z'],
            ['starcraft_name' => '3040-Darks','tier' => '4','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Mireu','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Mashimaro','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-LS','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-tori','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-TaNoS','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-BangJun','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-NuRa','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-reddot','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Art','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-golf','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Vlacky','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Ook','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-nemo','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-mori','tier' => '4','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-Kara','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Joony','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-hanbi','tier' => '4','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-ZZangju','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-onnida','tier' => '4','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Luka','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Blue','tier' => '4','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ggoma','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-land-lover','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ChaeDam','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-HakSal','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ChanWoo','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-WaSaBi','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-kimgamdok','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-SIBU','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-LYG','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-panda','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-dalbit','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-taegi','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ares','tier' => '5','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-Ugi','tier' => '5','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-Dra','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ganinhan','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-apple','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-sunho','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ting','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Life','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Die','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Wons','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-rorang','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Suyueon','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-NGPark','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Chugi','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-SonSa','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ZINI','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-hogu','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-romang','tier' => '5','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-kopi','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-chunha','tier' => '5','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-bory','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-zinga','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-sooyoung','tier' => '5','starcraft_race' => 'P,T'],
            ['starcraft_name' => '3040-ajura','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-AAA','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Marine','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Unicorn','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Oops','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-jjaem','tier' => '5','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-wolf','tier' => '6','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-kai','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-very','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-semin','tier' => '6','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-choisniper','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Jakdu','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Gun','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-udong','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-elju','tier' => '6','starcraft_race' => 'R'],
            ['starcraft_name' => '3040-infi50','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-lord','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Daegu','tier' => '6','starcraft_race' => 'T'],
            ['starcraft_name' => '3040-Sunny','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-ZZung','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-BBoDDo','tier' => '6','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-zwanjin','tier' => '7','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-chamchi','tier' => '7','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-OBok','tier' => '7','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Nayu','tier' => '7','starcraft_race' => 'P,Z'],
            ['starcraft_name' => '3040-kimguiter','tier' => '8','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-goodman','tier' => '8','starcraft_race' => 'P'],
            ['starcraft_name' => '3040-Mux','tier' => '8','starcraft_race' => 'Z'],
            ['starcraft_name' => '3040-Doosung','tier' => '8','starcraft_race' => 'R'],
        ]);
    }
}
