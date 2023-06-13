<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientPastIllness extends Model
{
    protected $table ='patient_past_illnesses';
    protected $fillable = [
      'patient_id','past_illness'
    ];

    public static function past_illness(){
        return [
          [
            'patient_id'=>1,
            'past_illness'=>'Hypertension'
          ],

          [
            'patient_id'=>2,
            'past_illness'=>'Diabetes',
          ],

          [
            'patient_id'=>3,
            'past_illness'=>'Asthma',
          ]
        ];
    }
}
