<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Sale;
use App\Comment;
use App\CardDetail;
use App\Status;
use Illuminate\Support\Facades\Auth;

class CustomerRetentionController extends Controller
{
    public function index(){

        $sales=Sale::where('status_id','=','8')->orwhere('status_id','=','7')->paginate(10);
        return view('retentions.index',compact('sales'));
    }
    public function edit($id)
    {

        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $sales=Sale::all();
        $c_card=CardDetail::where('sale_id', $id)->first();
        $comment=Comment::where('sale_id',$sale->id)->first();
        $comments=Comment::where('sale_id',$id)->get();

        return view('retentions.edit', compact('sale','services','c_card','sales','comment','comments'));
    }
    public function update(Request $request,$id)
    {
        $sale =Sale:: where('id',$id)->first();
        
        if($request->returned == "returned")
        {
            
            $sale->status_id =10;
            $sale->save();

            $comment=new Comment();    
            $comment->comment = $request->comment;
            $comment->sale_id = $sale->id;
            $comment->user_id = Auth::user()->id;

            $comment->save();

       } 
       elseif($request->completed=="completed")
       {

           $sale->status_id =7;
           $sale->save();

           $comment=new Comment();    
           $comment->comment = $request->comment;
           $comment->sale_id = $sale->id;
           $comment->user_id = Auth::user()->id;

           $comment->save();

       }
    
            return redirect()->route('retentions.index');
        
    }
    public function show(Sale $sale)
    {
        dd($sale->id);
        
        $sale=Sale::where('id',$id)->first();
        dd($sale);
        $c_card=CardDetail::where('sale_id',$id)->first();
        $services=Service::all();
        $comment=Comment::where('sale_id',$sale->id)->first();
        $comments=Comment::where('sale_id',$id)->get();
        
       
        
        return view('retentions.show', compact('comment','services','sale','c_card','comments'));
    }
}
