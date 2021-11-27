<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTicket extends Model
{
    protected $fillable=['id','userID','provinceID','namecustomer','phonecustomer',];

    public $table = "bookticket";
}
