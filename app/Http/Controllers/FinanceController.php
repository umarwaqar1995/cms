<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Service;
use App\Comment;

class FinanceController extends Controller
{
    public function index(){

        $sales=Sale::all();
        return view('finances.index',compact('sales'));
    }
    public function edit($id)
    {
        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $comment=Comment::all();
        
        return view('finances.edit', compact('id','services','comment','sale'));
    }
    public function update( Request $request,Sale $sale)
    {
        $sale->agent_id = $request->agent_id;
        $sale->agent_name = $request->agent_name;
        $sale->agent_email = $request->agent_email;
        $sale->time = $request->time;

        $sale->first_name = $request->customer_first_name;
        $sale->last_name = $request->customer_last_name;
        $sale->customer_email = $request->customer_email;
        $sale->phone_number = $request->phone_number;
        $sale->alt_phone_number = $request->alt_phone_number;

        $sale->street_address = $request->street_address;
        $sale->city = $request->city;
        $sale->state = $request->state;
        $sale->zip = $request->zip;
        
        $sale->csp = $request->csp;
        $sale->service_provider = $request->service_provider;
        $sale->account_number = $request->account_number;
        $sale->account_info = $request->account_info;
        $sale->original_bill = $request->original_bill;
        $sale->amount_to_charged = $request->amount_to_charged;
        $sale->financial_client = $request->financial_client;
        $sale->billing_info = $request->billing_info;
        $sale->csr_comment = $request->csr_comment;

        $sale-> save();

        $comment=new Comment();
        $comment->comment = $request->comment;

        $comment-> save();

            return redirect()->route('sales.index');
        
    }
}
