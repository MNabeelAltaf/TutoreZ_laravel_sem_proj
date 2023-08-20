<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorRegistration extends Model
{

    protected $PrimaryKey = 'id';

    public $timestamps = false;

    protected $fillable = 
    [
        'name', 'email', 'DOB','mobileNumber','gender','martialStatus','address','nationality','state','province','district','city','fatherName','motherName','fatherOccupation','bankName','iban','cnic','pass','courses','teachingMode',
        'rate'
    
    ];


    use HasFactory;
}
