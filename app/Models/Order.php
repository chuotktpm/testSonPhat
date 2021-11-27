<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['id','userID','coachrouteID','chainTicketID',];

    public $table = "order";
}
