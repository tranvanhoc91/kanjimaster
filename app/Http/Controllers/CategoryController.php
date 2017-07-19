<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Menu;

class CategoryController extends Controller
{
    //
    public function getList(){
    	$menus = array('menu1','menu2','menu3');
    	return view('admin.category.list',['menus'=>$menus]);
    }
    
    public function getAdd(){
    	return view('admin.category.add');
    }

    public function getEdit(){
    	return view('admin.category.edit');
    }


}
