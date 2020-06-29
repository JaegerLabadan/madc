<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    protected $table = "records";
    protected $fillable = [
        'record_date', 'number_of_appointments'
    ];
}
