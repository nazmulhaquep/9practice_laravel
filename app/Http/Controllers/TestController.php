<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use DB;

// This will output the barcode as HTML output to display in the browser

class TestController extends Controller
{
    public function load_form(){
        $data = DB::select("SELECT * FROM codes WHERE status=2 ORDER BY id,code ASC");
        return view('form',compact('data'));
    }

    public function generate_barcode(Request $request){
        $limit = $request->limit;
        $code_id = substr($request->code,0,8);
        $code_right = substr($request->code,8,8);

        $data = DB::select("SELECT id,code
        FROM codes WHERE id = '$code_id' AND code >= '$code_right' AND status=2 LIMIT $limit");   

        foreach($data as $dt){
            // Create a new instance of the BarcodeGeneratorPNG class
            $barcodeGenerator = new BarcodeGeneratorPNG();
            // Generate the barcode image data
            $code_string = "'".$dt->id.$dt->code."'";
            $barcodeData = $barcodeGenerator->getBarcode($code_string, $barcodeGenerator::TYPE_CODE_128);
            
            $headers = [
                'Content-Type' => 'image/png',
            ];

            $save = DB::table('codes')->where('id',$dt->id)->where('code',$dt->code)->update([
                'reg_code'=>$dt->id.$dt->code,
                'barcode'=>base64_encode($barcodeData),
                'status'=>1
            ]);

            //return response($barcodeData, 200, $headers);
        }
    }

    public function all_barcode(){
        $data = $data = DB::table("barcodes")
                ->get();
        return view('all_barcode',compact('data'));
    }
    
    public function search_barcode(Request $request){
        $data = DB::select("SELECT id, MIN(code) AS code
        FROM codes GROUP BY id");

        $search_start = $request->start; 
        $search_start_id = substr($request->start,0,8); 
        $search_start_code = substr($request->start,8,8); 

        $search_end = $request->end; 
        $search_end_id = substr($request->end,0,8); 
        $search_end_code = substr($request->end,8,8); 
        
        $search_data = DB::table("codes")
                        ->where('id',$search_start_id)
                        ->where('code','>=',$search_start_code)
                        ->where('status',1)
                        ->orderBy('code','ASC')
                        ->get(); 

        if($search_start !=='' && !$search_end=='' && $request->action =='print'){
            //print pdf
           return $this->print_pdf($search_start_id,$search_start_code,$search_end_code);
        }    
        if($search_start !=='' && !$search_end==''){
            //search barcode from start & end range
           return $this->search_matchcode($data,$search_data,$search_start,$search_end,$search_start_id,$search_start_code,$search_end_code);                          
        }              
        return view('search_barcode',compact('data','search_data','search_start'));
    }


    //search barcode from start & end range
    public function search_matchcode($data,$search_data,$search_start,$search_end,$search_start_id,$search_start_code,$search_end_code){
        $barcode_data = DB::table("codes")
                        ->where('id',$search_start_id)
                        ->where('code','>=',$search_start_code)
                        ->where('code','<=',$search_end_code)
                        ->where('status',1)
                        ->orderBy('code','ASC')
                        ->get();                
                       
          return view('search_barcode',compact('data','search_data',
          'search_start','search_end','barcode_data'));
    }

    //print pdf
    public function print_pdf($search_start_id,$search_start_code,$search_end_code){
        $barcode_data = DB::table("codes")
                        ->where('id',$search_start_id)
                        ->where('code','>=',$search_start_code)
                        ->where('code','<=',$search_end_code)
                        ->where('status',1)
                        ->orderBy('code','ASC')
                        ->get(); 
          
        $pdf = PDF::loadView('myPDF', compact('barcode_data'));
        return $pdf->download('barcodes.pdf');
    }

}
