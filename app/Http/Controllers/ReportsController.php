<?php

namespace App\Http\Controllers;

use App\User;
use App\Sale;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function ReportsFiter()
    {
        $users=User::where('role_id',5)->get();

        return view('reports.reports_filter');

    }
    public function Results(Request $request)
    {
        //dd($request);
        
        $from    = Carbon::parse($request->from)
                 ->startOfDay()        
                 ->toDateTimeString();

        $to      = Carbon::parse($request->to)
                 ->endOfDay()         
                 ->toDateTimeString();
                 

        
        $sales=Sale::whereBetween('created_at', [$from, $to])->orderBy('created_at','desc')->get();



        return view('reports.results',compact('sales','from','to'));
    }

    public function ViewAllSales(){
        $users=User::where('role_id',5)->get();
        $sales=Sale::orderBy('created_at','desc')->get();

        
        return view('reports.view_all_sales',compact('users','sales'));
    }
    

}
