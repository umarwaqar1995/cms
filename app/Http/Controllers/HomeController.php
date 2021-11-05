<?php

namespace App\Http\Controllers;
use App\Sale;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $result=DB::select(DB::raw("SELECT COUNT(*) as total_sales_per_agent, agent_id FROM sales GROUP BY agent_id"));
        $chart_data="";
        foreach($result as $list)
        {
            $chart_data.="['".$list->agent_id."',".$list->total_sales_per_agent."],";
        }
        $arr['chart_data']=rtrim($chart_data,",");

        $login_user=Auth::user();
        if($login_user->role_id==1)
        {
        
            $sales=Sale::all();
            $initiate_sales=Sale::where('status_id',6)->get();
            $pending_sales=Sale::where('status_id',1)->get();
            $cancelled_sales=Sale::where('status_id',4)->get();
            $completed_sales=Sale::where('status_id',7)->get();
            $declined_sales=Sale::where('status_id',2)->get();
            $processed_sales=Sale::where('status_id',8)->get();
            $charged_sales=Sale::where('status_id',3)->get();

        }
        else
        {
            $sales=Sale::where('agent_id',$login_user->id)->get();
            $initiate_sales=Sale::where('agent_id',$login_user->id)->where('status_id',6)->get();
            $pending_sales=Sale::where('agent_id',$login_user->id)->where('status_id',1)->get();
            $cancelled_sales=Sale::where('agent_id',$login_user->id)->where('status_id',4)->get();
            $completed_sales=Sale::where('agent_id',$login_user->id)->where('status_id',7)->get();
            $declined_sales=Sale::where('agent_id',$login_user->id)->where('status_id',2)->get();
            $processed_sales=Sale::where('agent_id',$login_user->id)->where('status_id',8)->get();
            $charged_sales=Sale::where('agent_id',$login_user->id)->where('status_id',3)->get();

        }



        
    

        return view('home',$arr, compact('sales','initiate_sales','pending_sales',
                                         'cancelled_sales','completed_sales',
                                         'declined_sales','processed_sales',
                                         'charged_sales','login_user'));
    }
}
