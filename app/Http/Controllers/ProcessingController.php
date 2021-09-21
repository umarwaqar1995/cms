<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Service;
use App\Comment;


class ProcessingController extends Controller
{
    public function index(){

        $sales=Sale::paginate(5);
        return view('processings.index',compact('sales'));
    }
}
