<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingRequests extends Model
{


    protected $PrimaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['SFirstName','SLastName','SEmail','SContactNumber','SAddress','SCity','SCourse','STeachingHour','Tid','TName','Description','PaymentMethod','TeachingMode'];

    use HasFactory;
}
