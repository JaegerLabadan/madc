<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    //
    protected $table = "appointment";
    protected $fillable = [
        'appointment_date', 'appointment_customer', 'appointment_service',
        'appointment_time_start', 'appointment_time_end', 'appointment_status'
    ];
}
