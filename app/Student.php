<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
        protected $fillable = [
        'userid','name','fname','mname','email','phone','dob','course','branch','sgpa','admitcard' 
        
        
        /*'tenthBoard','tenthPercentage'
        ,'twelfthBoard'
        ,'twelfthPercentage'
        ,'UG'
        ,'UGPercentage',
        'programEnrolledID',
        'enrollmentYear',
        'firstSemResult' ,
        'firstSemPercentage',
        'secondSemResult' ,
        'secondSemPercentage',
        'thirdSemResult' ,
        'thirdSemPercentage',
        'fourthSemResult' ,
        'fourthSemPercentage',
        'fifthSemResult' ,
        'fifthSemPercentage',
        'sixthSemResult' ,
        'sixthSemPercentage',
        'seventhSemResult' ,
        'seventhSemPercentage',
        'eighthSemResult' ,
        'eighthSemPercentage',
        'ninethSemResult' ,
        'ninethSemPercentage',
        'tenthSemResult',
        'tenthSemPercentage',
        'degreeAwarded',
        */
    ];
}
