<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Sale;
use App\Comment;
use App\CardDetail;
use App\Status;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;


class SalesController extends Controller
{
    public function index(){


        $sales=Sale::orderBy('created_at','desc')->where('agent_id',Auth::user()->id)
                   ->wherein('status_id',[6,2,4])
                   
                   ->paginate(10);       
        
        return view('sales.index',compact('sales'));
    }
    public function create(){

        $services=Service::all();
        return view('sales.create', compact('services'));
    }
    public function store(Request $request){

        $sale= new Sale();
        
        $sale->agent_id = Auth::user()->id;
        $sale->agent_name = Auth::user()->name;
        $sale->agent_email = Auth::user()->email;
        $sale->role_id = Auth::user()->Roles->id;
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
        $sale->status_id =6;
        
        $sale-> save();

        $card=new CardDetail();
        $card->cc_name = $request->cc_name;
        $card->cc_number = $request->cc_number;
        $card->cc_month = $request->cc_month;
        $card->cc_year = $request->cc_year;
        $card->cc_cvc = $request->cc_cvc;
        $card->sale_id = $sale->id;
        $card->agent_id = Auth::user()->id;

        $card->save();

        $comment=new Comment();
        $comment->comment = $request->comment;
        $comment->sale_id = $sale->id;
        $comment->user_id = Auth::user()->id;

        $comment->save();


        return redirect()->route('sales.index');
    }
    public function edit($id)
    {
        
        $sale=Sale::where('id',$id)->first();
        $services=Service::all();
        $sales=Sale::all();
        $cards=CardDetail::all();
        $c_card=CardDetail::where('sale_id', $id)->first();
        $comment=Comment::where('sale_id',$sale->id)->first();
        $comments=Comment::where('sale_id',$id)->get();

      
       
    
        return view('sales.edit', compact('sale','services','c_card','sales','cards','comments','comment'));
    }
    // public static function get_user_info($id)
    // {       
    //     $users=User::where('id',$id)->first();   
    //     return $users;         
    // }
    // public static function get_user_role($id)
    // {
    //    $role_id= User::where('id',$id)->first();
    //    $role_id= $role_id->role_id;
    //     $role_title=Role::where('id',$role_id)->first();
    //     return $role_title->title;         
    // }
    public function update( Request $request,Sale $sale)
    {

        if($request->update == "update")
        {

            $sale->agent_id = Auth::user()->id;
            $sale->agent_name = Auth::user()->name;
            $sale->agent_email = Auth::user()->email;
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
            $sale->status_id =6;

            $sale-> save();
                
            $c_card=CardDetail::where('sale_id',$sale->id)->first();
                                
            $c_card->sale_id = $sale->id;
            $c_card->cc_name = $request->cc_name;
            $c_card->cc_number = $request->cc_number;
            $c_card->cc_month = $request->cc_month;
            $c_card->cc_year = $request->cc_year;
            $c_card->cc_cvc = $request->cc_cvc;
            $c_card->sale_id = $sale->id;
            $c_card->agent_id = Auth::user()->id;
            $c_card->save();

            // $comment=Comment::where('sale_id',$sale->id)->first();

            $comment=new Comment();    
            $comment->comment = $request->comment;
            $comment->sale_id = $sale->id;
            $comment->user_id = Auth::user()->id;

            $comment->save();

        }
        else if($request->proceed == "proceed")
        {
            $sale->agent_id = Auth::user()->id;
            $sale->agent_name = Auth::user()->name;
            $sale->agent_email = Auth::user()->email;
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
            $sale->status_id =1;

            $sale-> save();
                
            $c_card=CardDetail::where('sale_id',$sale->id)->first();
                                
            $c_card->sale_id = $sale->id;
            $c_card->cc_name = $request->cc_name;
            $c_card->cc_number = $request->cc_number;
            $c_card->cc_month = $request->cc_month;
            $c_card->cc_year = $request->cc_year;
            $c_card->cc_cvc = $request->cc_cvc;
            $c_card->sale_id = $sale->id;
            $c_card->agent_id = Auth::user()->id;
            $c_card->save();

            // $comment=Comment::where('sale_id',$sale->id)->first();

            $comment=new Comment();    
            $comment->comment = $request->comment;
            $comment->sale_id = $sale->id;
            $comment->user_id = Auth::user()->id;

            $comment->save();

             
        }

        return redirect()->route('sales.index');
        
    }
    // public function proceed(Request $request,Sale $sale)
    // {
    //    dd($sale);
        
    //     return redirect()->route('sales.index');
    // }
    public function show(Sale $sale)
    {
        $c_card=CardDetail::where('sale_id',$sale->id)->first();
        $services=Service::all();
        $comment=Comment::where('sale_id',$sale->id)->first();
        // dd($comment);
        
        return view('sales.show', compact('comment','services','sale','c_card'));
    }
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return back();
    }
    


}
