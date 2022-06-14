<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Place;


class PageController extends Controller
{
    public function index(){

    
       $vacations = Place::all();
       
        return view('welcome',compact('vacations'));
        
    }
}
