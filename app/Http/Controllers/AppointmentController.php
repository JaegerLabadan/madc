<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model Imports
use App\Appointments;

// 
use DateTime;

class AppointmentController extends Controller
{
    //

    public function checkIfDayIsFull(Request $request){

        $date = $request->get('date');
        $time = $request->get('time');
        $total = 0;
        $timeArray = array(
            '9:00 am', '9:30 am',
            '10:00 am', '10:30 am',
            '11:00 am', '11:30 am',
            '12:00 pm', '12:30 pm',
            '1:00 pm', '1:30 pm',
            '2:00 pm', '2:30 pm',
            '3:00 pm', '3:30 pm',
            '4:00 pm', '4:30 pm',
            '5:00 pm'
        );
        $newTimeArray = array();
        $availableTime;
        $check = Appointments::where('appointment_date', $date)
                             ->pluck('appointment_time_value')
                             ->all();
        foreach($check as $ch){
            $total = $total + $ch;
        }
        // Check time
        if($total <= 480){

            // if($time == 30){

            //     $copyOfTimeArray = $timeArray;
            //     $taken = Appointments::where('appointment_date', $date)
            //                          ->get();
            //     if(!$taken->isEmpty()){
                    
            //         for($i = 0; $i < count($timeArray); $i++){
    
            //             $now = Date("H:i", strtotime($timeArray[$i]));
            //             for($j = 0; $j < count($taken); $j++){
    
            //                 $start = Date("H:i", strtotime($taken[$j]->appointment_time_start));
            //                 $end = Date("H:i", strtotime($taken[$j]->appointment_time_end));
            //                 if($now >= $start && $now <= $end){
        
            //                     unset($copyOfTimeArray[$i]);
                                
            //                 }
            //                 else{
                                
            //                     $temp = strtotime($timeArray[$i]);
            //                     $container = Date("H:i", strtotime('+30 minutes', $temp));
            //                     if($container >= $start && $container <= $end){
                                
                                    
            //                     }
            //                     else{

            //                         array_push($newTimeArray, Date("g:i a", strtotime($temp)));

            //                     }

            //                 }
    
            //             }
    
            //         }

            //         return $newTimeArray;
                    
            //     }
            //     else{
    
            //         return "ALL AVAILABLE";
    
            //     }

            // }

            return "NOT FULL";

        }
        else{

            return "FULL";

        }

    }


    public function checkIfAppointmentExists(Request $request){

        $date = $request->get('date');
        $start = $request->get('start');
        $end = $request->get('end');
        $check = Appointments::where('appointment_date', $date)
                             ->get();


        $startRecord = Date("H:i", strtotime($check[0]->appointment_time_start));
        $endRecord = Date("H:i", strtotime($check[0]->appointment_time_end));

        $start = Date("H:i", strtotime($start));
        $end = Date("H:i", strtotime($end));

        if($start >= $startRecord && $start <= $endRecord || $end >= $startRecord && $end <= $endRecord){

            return "EXISTS";

        }
        else{

            return "AVAILABLE";

        }

    }
}
