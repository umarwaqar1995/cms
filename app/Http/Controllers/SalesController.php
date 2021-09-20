<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Sale;
use App\Comment;
use App\CardDetail;


class SalesController extends Controller
{
    public function index(){

        $sales=Sale::all();
        return view('sales.index',compact('sales'));
    }
    public function create(){

        $services=Service::all();
        return view('sales.create', compact('services'));
    }
    public function store(Request $request){

        $sale= new Sale();
        
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

        $comment->save();

        $card=new CardDetail();
        $card->cc_name = $request->cc_name;
        $card->cc_number = $request->cc_number;
        $card->cc_month = $request->cc_month;
        $card->cc_year = $request->cc_year;
        $card->cc_cvc = $request->cc_cvc;

        $card->save();


        return redirect()->route('sales.index');
    }
    public function edit(Sale $sale)
    {
        $services=Service::all();
        $comment=Comment::all();
    
        return view('sales.edit', compact('sale','services','comment'));
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

        $card=new CardDetail();
        $card->cc_name = $request->cc_name;
        $card->cc_number = $request->cc_number;
        $card->cc_month = $request->cc_month;
        $card->cc_year = $request->cc_year;
        $card->cc_cvc = $request->cc_cvc;
        $card->sale_id = $sale->id;
        $card-> agent_id= $request->agent_id;

        $card->save();

            return redirect()->route('sales.index');
        
    }
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return back();
    }

    // public function addJob(){
    //     $data= Service::all();
    //     //return $data;
    //     return view('/layouts/jobs/add_job',['services'=>$data]);
    //     //return view('/layouts/jobs/add_job',compact($data));
    
    // }

    // function addData(Request $req){
    //     $job= new Job;
    //     $job->time = $req->time;
    //     $job->agent_email = $req->agent_email;
    //     $job->agent_id = $req->agent_id;
    //     $job->csp = $req->csp;
    //     $job->phone_num = $req->phone_number;
    //     $job->alt_phone_num = $req->alternate_phone_number;
    //     $job->email = $req->email_address;
    //     $job->f_name  = $req->customer_first_name;
    //     $job->l_name = $req->customer_last_name;
    //     $job->street_addrs = $req->street_address;
    //     $job->city = $req->city;
    //     $job->state = $req->state;
    //     $job->zip = $req->zip;
    //     $job->service_provider  = $req->service_provider;
    //     $job->account_num = $req->account_number;
    //     $job->account_info  = $req->account_info;
    //     $job->original_bill_price = $req->original_bill;
    //     $job->amount_to_charged = $req->amount_to_charged;
    //     $job->financial_client = $req->financial_client;
    //     $job->billing_info = $req->billing_info;
    //     $job->csr_comment = $req->csr_comments;
        
    //     $job-> save();

    //     return redirect('/add');
        


    // }

}
