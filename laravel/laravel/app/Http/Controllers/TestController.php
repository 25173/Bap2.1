<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testQuery(){
       // $drivers = \DB::table('team')->get();
        $speler  = \DB::table('team')->where('rugnummer', '>', 10)->get();

//        $insert = \DB::table('team')->insert(
//            [
//                'id' => '',
//                'naam' => 'reda',
//                'tussenvoegsel' => '',
//                'achternaam' => 'houman',
//                'rugnummer' => 6,
//                'taak' => 'speler'
//            ]
//        );

        dd($speler);
    }
}
