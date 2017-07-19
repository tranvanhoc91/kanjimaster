<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
	
	public function getLogin(){
		return view("user.login"); //goi den view login.blade.php
	}
	
	
	public function checkLogin(){
		
	}
	
	public function getRegister(){
		return view("user.register");
	}
	
	public function getRecoverPassword(){
		return view("user.recover-password");
	}
	
	
	
	
	/**
	 * 
	 * Login for admin page
	 */
	public function getAdminLogin(){
		return view("admin.login");
	}
	
	public function postAdminLogin(){
		return redirect("menu/list/");
	}
	
	
	/**
	 * 
	 * logout
	 */
	public function getAdminLogout(){
		//Delete seccion, cookie
		
		//logout and directer login page
		return view("admin.login");
	}



	//Users data screen
	public function getList(){
		$user = array('user1','user2','user3');
    	return view('admin.user.list',['users'=>$user]);
	}

	public function getAdd(){
    	return view('admin.user.add');
	}

	public function postEdit(){
    	return view('admin.user.edit');
	}




}
