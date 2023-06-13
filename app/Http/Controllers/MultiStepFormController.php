<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientPresentIllness;
use App\Models\PatientPastIllness;
use App\Models\ChiefComplaint;
use Validator;
use Response;

class MultiStepFormController extends Controller{

    public function create(){
        $patient_id = 1; //login user id
        
        //check in draft table
        $complaients = ChiefComplaint::where('patient_id',1)->first();

        //check in draft table
        $PresentIllness  = PatientPresentIllness::where('patient_id',1)
        ->orderBy('created_at','DESC')
        ->get();

        $resultPresentIllness = [];

        foreach ($PresentIllness as $PresentIll) {
            $resultPresentIllness[] = $PresentIll->present_illness;
        }

        $resultPastIllness =[];
        
        //check in draft table
        $PastIllness  =   PatientPastIllness::where('patient_id',1)
        ->orderBy('created_at','DESC')
        ->get();

        foreach($PastIllness as $PastIll){
            $resultPastIllness[] = $PastIll->past_illness;
        }
        return view('form_steps', compact('resultPresentIllness','resultPastIllness','complaients'));
    }
    public function store(Request $request){

       try{

             //complaint validation
        $input = $request->all();

        $validator = Validator::make($input,
        [
            'complaint'=>'required',
            'how_long'=>'required',
            'duration'=>'required',
            'option'=>'required'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $present_illness[] = $request->present_illness;
        $past_illness[] = $request->past_illness;

        $present_ill = explode(",",$present_illness[0]);

        //data update or insert check first start
        //$request->patient_id
       
        //insert
        //working at draft table
        if($request->stage==1){
            $complaint_exist = ChiefComplaint::where('patient_id',1)->first();

            if(isset($complaint_exist->patient_id) && !empty($complaint_exist->patient_id)){
                $complaint_exist->patient_id = $request->patient_id;
                $complaint_exist->complaint = $request->complaint;
                $complaint_exist->how_long = $request->how_long;
                $complaint_exist->duration = $request->duration;
                $complaint_exist->option = $request->option;
                $complaint_exist->update();
            }else{
                $complaint  =  new ChiefComplaint();
                $complaint->patient_id = $request->patient_id;
                $complaint->complaint = $request->complaint;
                $complaint->how_long = $request->how_long;
                $complaint->duration = $request->duration;
                $complaint->option = $request->option;
                $complaint->save();
            }
        }
        //working at draft table
        if($request->stage==2){

        PatientPresentIllness::where('patient_id',1)->delete();

            for($i=0;$i<count($present_ill);$i++){
                $patient_present_illness = new PatientPresentIllness();
                $patient_present_illness->patient_id = 1;
                $patient_present_illness->present_illness = $present_ill[$i];
                $patient_present_illness->save();
            }
        } 

        //data update or insert check first end

        //comma seperated value to array
        $past_ill = explode(",",$past_illness[0]);

        //$request->patient_id

        //working at draft table
        if($request->stage==3){
            PatientPastIllness::where('patient_id',1)->delete();
            for($j=0;$j<count($past_ill);$j++){

                $patient_past_illness = new PatientPastIllness();
                $patient_past_illness->patient_id = 1;
                $patient_past_illness->past_illness = $past_ill[$j];
                $patient_past_illness->save();
            }

        // finally save at main publish table 
        
        //then delete all data from draft table
          
        }

       }catch(\Exception $e){
            return $e->getMessage();
       }
    
    }
}
