<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//////////////////////Test//////////////////////////////////

Route::get('admin/test/savedata', function (){
	$menu = new App\Menu();
	$menu->title = "menu test 1";
	$menu->parent_id = "2";
	
	$menu->save();
	echo "inserted data successlly";
});


Route::get('admin/test/getcategories', function (){
	echo 'get categories';
});






//////////////////////////////////////////////////////




//////////////////////For font end//////////////////////////////////


Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('home', "PagesController@getIndex");


Route::get('index', "PagesController@getIndex");
Route::get('radical', "Radical@getRadical");



Route::get('login', "UserController@getLogin");
Route::get('register', "UserController@getRegister");
Route::get('recoverpwd', "UserController@getRecoverPassword");



//Tag pages
Route::get('/', "TagController@getList");
Route::get('tag/', "TagController@getList");

//bookmark page
Route::get('bookmark', "BookmarkController@getList");
Route::get('bookmark/test', "BookmarkController@getTest");

//radical
Route::group(['prefix'=>'radical/'],function (){
	Route::get('/','RadicalController@getCategories');
	Route::get('card/','RadicalController@getCard');
	Route::get('detail/','RadicalController@getDetail');
});





//////////////////////For Admin Page//////////////////////////////////
Route::get('admin/login', "UserController@getAdminLogin");
Route::post('admin/login', "UserController@postAdminLogin");
Route::get('admin/logout', "UserController@getAdminLogout");
Route::get('admin/index', "MenuController@getList");


//test
Route::get('admin/thu', function(){
	return view('admin.menu.list');
});
Route::get('admin/edit', function(){
	return view('admin.menu.edit');
});


Route::get('admin/', "DashboardController@getDefault");
Route::get('admin/category', "CategoryController@getList");

Route::group(['prefix'=>'admin'],function (){
	Route::group(['prefix'=>'user'],function (){
		//
		Route::get('list','UserController@getList');
		Route::get('add','UserController@getAdd');
		Route::post('edit','UserController@postEdit');
	});

	

});


    
/*
if(DB::connection()->getDatabaseName()){
	echo "connected successfully to database ".DB::connection()->getDatabaseName();
}
*/
