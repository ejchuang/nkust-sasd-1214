<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lottocontroller extends Controller
{
    function lotto(){
        $taiwan_year = date('Y')-1911;
        $taiwan_formatday = date("m/d"); 
        $taiwan_day = date("md"); 
        $taiwan_time = date("his");
        $today = (string) $taiwan_year .'/'. (string) $taiwan_formatday;
        $times =(string) $taiwan_year . (string) $taiwan_day. (string) $taiwan_time;
        $lucky_number = rand(1, 49);
        $numbers = array();
        for ($i=0; $i<6; $i++) {
            $numbers[] = rand(1, 49);
        }
        sort($numbers);
        return view('lotto', compact('lucky_number', 'numbers','today','times'));
    }
    


}
