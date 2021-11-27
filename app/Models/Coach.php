<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable=['id','license_plate','number_seats','number_beds','cargo_per_customer','name','phone','timestart',];

    public $table = "coachinfo";
}
