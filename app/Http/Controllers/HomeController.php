<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
     
      return view('welcome');

    }
    
    public function show(Request $request){
      
      $invoice1 = $request->input('invoice'); 

     
      $cms4Invoice = DB::connection('calgarystar_track')
      ->table('invoicestatuses')
      ->join('trackstatuses', 'invoicestatuses.trackstatus_id', '=', 'trackstatuses.id')
      ->join('provincephils', 'invoicestatuses.provincephil_id', '=', 'provincephils.id')
      ->join('cityphils', 'invoicestatuses.cityphil_id', '=', 'cityphils.id')
      ->where(function ($query) use ($invoice1) {
        $query->where('invoicestatuses.generated_invoice', $invoice1)
            ->orWhere('invoicestatuses.manual_invoice', $invoice1);
    })
      ->get();  
    
      if($cms4Invoice->count()>0){
         
        return view('result2', ['invoice' => $cms4Invoice, 'invoice1'=>$invoice1 ]);

      }  
     

      $invoiceDetails = DB::connection('calgarystar_track_old')
      ->table('trackdatas')
      ->where('invoice', $invoice1)
      ->get();

      if($invoiceDetails->count() >0){
        return view('result', ['invoice' => $invoiceDetails, 'invoice1'=>$invoice1]);  

      }else{
        return view('invoice_not_found',['invoice1'=>$invoice1]);
      }
   
       }

        
    
}
