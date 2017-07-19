<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;

class PagesController extends Controller
{
    //
    public function __construct(){
    
    }


    public function getIndex(){
        //Show the list of tags of current user
        return view('index');
    }
    
    
   
}
