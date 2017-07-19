<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function getList(){
    	return ('tra ve danh sach cac menu');
    }
    
	public function getEdit(){
    	return ('tra ve danh sach cac edit ');
    }
    
	public function getAdd(){
    	return ('tra ve danh sach cac add menu');
    }
}
