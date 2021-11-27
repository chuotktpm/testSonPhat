<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachRoute extends Model
{
    protected $fillable=['id','license_plate','serial','id_province','price',];

    public $table = "coachroute";
}
