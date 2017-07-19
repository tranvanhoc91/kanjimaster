<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;

class DashboardController extends Controller
{
    //
    public function getDefault(){
    	return view("admin.default");
    }


}
