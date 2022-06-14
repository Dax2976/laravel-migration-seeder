<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Vacation;


class PageController extends Controller
{
    public function index(){

    //    ddd(Vacation::all());
       $vacations = Vacation::all();
        return view('welcome',compact('vacations'));
        
    }
}
