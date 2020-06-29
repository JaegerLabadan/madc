<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model Imports
use App\Appointments;
use App\Records;

// 
use DateTime;


class AppointmentController extends Controller
{
    //
    public function checkIfDayIsFull(Request $request){

        $date = $request->get('date');
        $time = $request->get('time');
        $slot = $request->get('slot');
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
                             ->where('slot_no', $slot)
                             ->get();

        foreach($check as $ch){
            $total = $total + $ch->appointment_time_value;
        }
        // Check time
        if($total <= 480){

           return $check;

        }
        else{

            return "FULL";

        }

    }

    public function saveAppointment(Request $request){

        $new = new Appointments;
        $new->appointment_date = $request->get('date');
        $new->appointment_customer = $request->get('name');
        $new->appointment_service = $request->get('service');
        $new->appointment_time_start = $request->get('start');
        $new->appointment_time_end = $request->get('end');
        $new->appointment_time_value = $request->get('time');
        $new->slot_no = $request->get('slot');
        $new->phone = $request->get('phone');
        $new->email = $request->get('email');
        $new->save();

        $check = Records::where('record_date', $request->get('date'))->get();
        if(!$check->isEmpty()){

            $data = Records::where('id', $check[0]->id)
                           ->update([
                            'number_of_appointments' => $check[0]->number_of_appointments + 1
                           ]);

        }
        else{

            $record = new Record;
            $record->record_date = $request->get('date');
            $record->number_of_appointments = 1;
            $record->save();

        }

        return "SUCCESS";

    }
}
