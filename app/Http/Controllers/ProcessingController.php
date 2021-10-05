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

        $sales=Sale::where('status_id','=','3')->orwhere('status_id','=','10')->paginate(10);
        return view('processings.index',compact('sales'));
    }
    public function edit($id)
    {

        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $sales=Sale::all();
        $c_card=CardDetail::where('sale_id', $id)->first();
        $comment=Comment::where('sale_id',$sale->id)->first();
        $comments=Comment::where('sale_id',$id)->get();


        return view('processings.edit', compact('sale','services','c_card','sales','comment','comments'));
    }
    public function update(Request $request,$id)
    {
        $sale =Sale:: where('id',$id)->first();
        
        if($request->request_to_refund == "request_to_refund")
        {
            
            $sale->status_id =9;
            $sale->save();

            $comment=new Comment();    
            $comment->comment = $request->comment;
            $comment->sale_id = $sale->id;
            $comment->user_id = Auth::user()->id;

            $comment->save();

       } 
       elseif($request->proceed=="proceed")
       {

           $sale->status_id =8;
           $sale->save();

           $comment=new Comment();    
           $comment->comment = $request->comment;
           $comment->sale_id = $sale->id;
           $comment->user_id = Auth::user()->id;

            $comment->save();

       }
    
            return redirect()->route('processings.index');
        
    }
}
