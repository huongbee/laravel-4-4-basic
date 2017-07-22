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

Route::get('trang-chu/{name}', 'PageController@getIndex');










Route::get('login', 'PageController@getLogin')->name('login');

Route::post('login',[
	'middleware'=>'KiemTraLogin',
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);
Route::get('logout', 'PageController@getLogout')->name('logout');


// Route::get('admin',[
// 	'middleware'=>'KiemTraLogin',
// 	'as'=>'trangquantri',
// 	'uses'=>'PageController@getAdmin'
// ]);
























Route::get('setcookie','PageController@setCookie');
Route::get('getcookie','PageController@getCookie');


Route::get('setsession','PageController@setSession');
Route::get('getsession','PageController@getSession');

// Route::get('demo',function(){
// 	echo "Hello World!";
// });
// Route::get('myroute/{ten?}',function($ten='Hương'){
// 	echo "Chào bạn $ten";
// })->where(['ten'=> '[a-zA-Z]+']);


// Route::get('user/{id?}/{name?}', function ($id=1,$name="Huong") {
//     echo $id.$name;
// })->where(['id'=> '[0-9]{1,3}','name'=> '[a-zA-Z]+'])
// ->name('ten_route');

// Route::get('posts',[
// 	'as'=>'name_route',
// 	function(){
// 		echo 'Đã gọi route';
// 	}
// ]);



// Route::get('goi_user',function(){
// 	return redirect()->route('name_route');
// });


// Route::group(['prefix'=>'admin'],function(){
// 	// admin/3
// 	Route::get('{id}',function($id){
// 		echo $id;
// 	})->where('id', '[0-9]+');
// 	// admin/change-password
// 	Route::get('change-password',function(){
// 		echo 'Đây là trang đổi pass';
// 	});
// });


Route::group(['prefix'=>'template'],function(){
	//template
	Route::get('/','PageController@getTrangchu');
	Route::get('/chi-tiet','PageController@getChitiet');
});




Route::get('sanpham','PageController@getListProduct');



Route::get('model','PageController@getTestModel');