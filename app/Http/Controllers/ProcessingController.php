<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Sale;
use App\Comment;
use App\CardDetail;
use App\Status;
use Illuminate\Support\Facades\Auth;


class ProcessingController extends Controller
{
    public function index(){

        $sales=Sale::where('status_id','=','3')->orwhere('status_id','=','3')->paginate(5);
        return view('processings.index',compact('sales'));
    }
    public function edit($id)
    {

        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $sales=Sale::all();
        // $c_comment= Comment::whereIn('sale_id', ['24'])->get();

        $c_card=CardDetail::where('sale_id', $id)->first();

        return view('processings.edit', compact('sale','services','c_card','sales'));
    }
    public function update(Request $request,$id)
    {
        $sale =Sale:: where('id',$id)->first();
        
        if($request->decline == "decline")
        {
            
            $sale->status_id =1;
            $sale->save();

       } 
       elseif($request->proceed=="proceed")
       {

           $sale->status_id =8;
           $sale->save();

       }
    
            return redirect()->route('processings.index');
        
    }
}
