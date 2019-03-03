<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

	Route::get('admin/login', ['as' => 'login', 'uses' => 'LoginController@getlogin']);
	Route::post('admin/login', ['as' => 'login', 'uses' => 'LoginController@postlogin']);
	Route::get('admin/signup', ['as' => 'signup', 'uses' => 'LoginController@getsignup']);
	Route::post('admin/signup', ['as' => 'signup', 'uses' => 'LoginController@postsignup']);



Route::group(['prefix' => 'admin'],function(){

	Route::get('home',function(){
		return view('admin.layout.master');
	});


	Route::group(['prefix' => 'category'],function(){
		//admin/Category/edit

		Route::get('list', 'CategoryController@getlist');

		Route::get('edit/{id}', 'CategoryController@getedit');

		Route::post('edit/{id}', 'CategoryController@postedit');

		Route::get('delete/{id}', 'CategoryController@getdelete');

		Route::get('add', 'CategoryController@getadd');

		Route::post('add', 'CategoryController@postadd');

	});


	Route::group(['prefix' => 'category'],function(){
		//admin/Category/edit

		Route::get('list', 'CategoryController@getlist');

		Route::get('edit/{id}', 'CategoryController@getedit');

		Route::post('edit/{id}', 'CategoryController@postedit');

		Route::get('delete/{id}', 'CategoryController@getdelete');

		Route::get('add', 'CategoryController@getadd');

		Route::post('add', 'CategoryController@postadd');

	});

	Route::group(['prefix' => 'order'],function(){
		//admin/Category/edit

		Route::get('list', 'OrderController@getlist');

		Route::get('edit/{id}', 'OrderController@getedit');

		Route::post('edit/{id}', 'OrderController@postedit');

		Route::get('delete/{id}', 'OrderController@getdelete');

		Route::get('add', 'OrderController@getadd');

		Route::post('add', 'OrderController@postadd');

		Route::get('orderdetails_list', 'OrderdetailController@getlist');

		Route::get('orderdetail_edit/{id}', 'OrderdetailController@getedit');

		Route::post('orderdetail_edit/{id}', 'OrderdetailController@postedit');

		Route::get('orderdetail_delete/{id}', 'OrderdetailController@getdelete');



	});

	Route::group(['prefix' => 'product'],function(){
		//admin/Category/edit

		Route::get('list', 'ProductController@getlist');

		Route::get('edit/{id}', 'ProductController@getedit');

		Route::post('edit/{id}', 'ProductController@postedit');

		Route::get('delete/{id}', 'ProductController@getdelete');

		Route::get('add', 'ProductController@getadd');

		Route::post('add', 'ProductController@postadd');

	});

	Route::group(['prefix' => 'user'],function(){
		//admin/Category/edit

		Route::get('list', 'UserController@getlist');

		Route::get('edit/{id}', 'UserController@getedit');

		Route::post('edit/{id}', 'UserController@postedit');

		Route::get('delete/{id}', 'UserController@getdelete');

		Route::get('add', 'UserController@getadd');

		Route::post('add', 'UserController@postadd');

	});

	Route::group(['prefix' => 'slide'],function(){
		//admin/Category/edit

		Route::get('list', 'SlideController@getlist');

		Route::get('edit/{id}', 'SlideController@getedit');

		Route::post('edit/{id}', 'SlideController@postedit');

		Route::get('delete/{id}', 'SlideController@getdelete');

		Route::get('add', 'SlideController@getadd');

		Route::post('add', 'SlideController@postadd');

	});

	Route::group(['prefix' => 'comment'],function(){
		//admin/Category/edit

		Route::get('list', 'CommentController@getlist');

		Route::get('edit/{id}', 'CommentController@getedit');

		Route::post('edit/{id}', 'CommentController@postedit');

		Route::get('delete/{id}', 'CommentController@getdelete');

		Route::get('add', 'CommentController@getadd');

		Route::post('add', 'CommentController@postadd');
	});

});
Route::get('trangchu',function(){
		return view('pages.home');
});
Route::group(['prefix' => 'pages'],function(){
	Route::get('gioithieu',function(){
		return view('pages.about');
	});

	Route::get('bando',function(){
		return view('pages.map');
	});

	Route::get('dangnhap',function(){
		return view('pages.login');
	});

	Route::get('dangky',function(){
		return view('pages.register');
	});

	Route::get('sanpham',function(){
		return view('pages.product');
	});

	Route::get('tintuc',function(){
		return view('pages.new');
	});

	Route::get('lienhe',function(){
		return view('pages.contact');
	});

	Route::get('taikhoan',function(){
		return view('pages.personal');
	});

	Route::get('giohang',function(){
		return view('pages.order');
	});
});