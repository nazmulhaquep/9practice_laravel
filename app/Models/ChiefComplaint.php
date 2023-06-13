<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiefComplaint extends Model
{
    protected $table='chief_complaints';
    protected $fillable =[
        'patient_id','complaint','how_long','duration','option'
    ];

    public static function all_chief_complaint(){

        return $all_complaints = [
            [
                "patient_id"=>1,
                "complaint"=>"Hair problem",
                "how_long"=>"Week",
                "duration"=>8,
                "option"=>"Contnuous",
            ],
            [
                "patient_id"=>2,
                "complaint"=>"Heart problem",
                "how_long"=>"Day",
                "duration"=>3,
                "option"=>"Nature",
            ],
            [
                "patient_id"=>3,
                "complaint"=>"Bone problem",
                "how_long"=>"Month",
                "duration"=>5,
                "option"=>"Nature",
            ],
        ];
    }
}
