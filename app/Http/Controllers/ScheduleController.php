<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ScheduleController extends Controller
{
    //
    public function schedule($city, $month){

        $schedules=$this->getMonthData($month);
        $locations=$this->getCity($city);
        //dd($schedules);
        return view('view')->with('schedule',$schedules);
        return view('view')->with('city',$locations);
    }

    public function getCity($city)
    {
        $locations=[];
       
    }
    

    public function getMonthData($month)
    {
        $schedules= [];
        switch($month){
            case'january':
                $schedules=[array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'5:20','magrib'=>'5:20'),
                array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'5:20','magrib'=>'5:20'),
                array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'5:20','magrib'=>'5:20'),
                array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'5:20','magrib'=>'5:20'),];
                break;
                case'february':
                    $schedules=[array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'5:20','magrib'=>'5:20'),
                    array('date'=>'01-02-2022','fazar'=>'5:20','johar'=>'6:20','magrib'=>'5:20'),
                    array('date'=>'01-02-2022','fazar'=>'6:20','johar'=>'8:20','magrib'=>'5:20'),
                    array('date'=>'01-02-2022','fazar'=>'8:20','johar'=>'10:20','magrib'=>'5:20'),];
                    // return with->('schedule',$schedules);
                    break;
                case'march':
                    $schedules=['date'=>'01-02-2022','fazar'=>'5:010'];
                    break;
        }
        return $schedules;
    }
}
