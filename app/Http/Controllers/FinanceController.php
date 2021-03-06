<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Status;
use App\Sale;
use App\Service;
use App\Comment;
use App\CardDetail;


class FinanceController extends Controller
{
    public function index(){

        $sales=Sale::where('status_id','=','1')->orwhere('status_id','=','3')->orwhere('status_id','=','9')->paginate(10);

        return view('finances.index',compact('sales'));
    }
    public function edit($id)
    {
        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $c_card=CardDetail::where('sale_id', $id)->first();
        $comment=Comment::where('sale_id',$sale->id)->first();
        $comments=Comment::where('sale_id',$id)->get();
        
        return view('finances.edit', compact('services','sale','c_card','comment','comments'));
    }
    public function update(Request $request,$id)
    {
        $sale =Sale:: where('id',$id)->first();
        
        if($request->decline == "decline")
        {
            
            $sale->status_id =2;
            $sale->save();

            $comment=new Comment();    
            $comment->comment = $request->comment;
            $comment->sale_id = $sale->id;
            $comment->user_id = Auth::user()->id;

            $comment->save();

       } 
       elseif($request->proceed=="proceed")
       {

           $sale->status_id =3;
           $sale->save();

           $comment=new Comment();    
           $comment->comment = $request->comment;
           $comment->sale_id = $sale->id;
           $comment->user_id = Auth::user()->id;

           $comment->save();

       }
       elseif($request->cancelled=="cancelled")
       {

           $sale->status_id =4;
           $sale->save();

           $comment=new Comment();    
           $comment->comment = $request->comment;
           $comment->sale_id = $sale->id;
           $comment->user_id = Auth::user()->id;

           $comment->save();

       }
    
            return redirect()->route('finances.index');
        
    }
    public function  show()
    {
        return redirect()->route('finances.index');

    }
}
