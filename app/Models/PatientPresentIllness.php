<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientPresentIllness extends Model
{
    protected $table ='patient_present_illnesses';
    protected $fillable = [
      'patient_id','present_illness'
    ];

    public static function present_illness(){
        return [
            [
                'patient_id'=>1,
                'present_illness[]'=>'Hypertension'
            ],

            [
                'patient_id'=>2,
                'present_illness[]'=>'Diabetes'
            ],

            [
                'patient_id'=>3,
                'present_illness[]'=>'Asthma'
            ],
        ];
    }


}

//$obj = new PatientPresentIllness();
//// Generate the data array
//$dataArray = $obj->present_illness();
//
//// Process the data array
//processArray($dataArray);
