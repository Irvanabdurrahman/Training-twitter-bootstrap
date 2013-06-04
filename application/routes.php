<?php

/* ----------------------------------------------------------
					Start Program
	----------------------------------------------------------*/
	
Route::get('/', function() {
    return View::make('login');
});

Route::get('login', function() {    
    return View::make('login');
});

Route::post('login', function() {
    $userinfo = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );
    if ( Auth::attempt($userinfo) ){
        return Redirect::to('menu');
    } else{
        return Redirect::to('login')
            ->with('login_errors', true);
    }
});
 
Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});


/* -------------------------------------------------------------------------------------------------------------
					Start Menu
	-------------------------------------------------------------------------------------------------------------*/
	//call menu.blade.php
	Route::get('menu', array('before' => 'auth', 'do' => function() {
		return View::make('menu');
	}));

	//call suplier.blade.php
	Route::get('suplier', function() {
		return View::make('suplier'); 
	});
	//call barang.blade.php
	Route::get('barang', function() {
		return View::make('barang'); 
	});
	//call barang_masuk1.blade.php
	Route::get('barang_masuk1', function() {
		return View::make('barang_masuk1'); 
	});
	//call laporan.blade.php
	Route::get('laporan', function() {
		return View::make('laporan'); 
	});
/* -------------------------------------------------------------------------------------------------------------
					End of Menu
	-------------------------------------------------------------------------------------------------------------*/

	
/* -------------------------------------------------------------------------------------------------------------
					Insert to table barangmasuks in database
	-------------------------------------------------------------------------------------------------------------*/
//call barang_masuk2.blade.php
	Route::get('barang_masuk2', array('before' => 'auth', 'do' => function() {
		return View::make('barang_masuk2');
	}));

//post value to table barangmasuks in database
Route::post('barang_masuk2', array('before' => 'auth', 'do' => function() { 
    $new_post = array(
        'jumlah'    => Input::get('jumlah'),
        'barang'     => Input::get('barang'),
        'tanggal'   => Input::get('tanggal'),
        'suplier'   => Input::get('suplier')
    );
    
	//rules for form
    $rules = array(
        'jumlah'     => 'required|max:20',
        'barang'      => 'required|min:3',
        'suplier'      => 'required|min:3',
        'tanggal'      => 'required|min:3'
    );
     
	//validation form
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails()){
        return Redirect::to('barang_masuk2')
                ->with_errors($validation)
                ->with_input();
    }
	// create the new post after passing validation
    $post = new Barangmasuk($new_post);
    $post->save();
	//call file barang_masuk2.blade.php
    return Redirect::to('barang_masuk2');
}));

//delete record in table barang_masuk2.blade.php
Route::delete('hapusBarangMasuk', function(){
		$id = Input::get('id');		
		barangmasuk::where('id','=',$id)->delete();
		return Redirect::to('barang_masuk2');
	});
/* -------------------------------------------------------------------------------------------------------------
					End Insert to table barangmasuks in database
	-------------------------------------------------------------------------------------------------------------*/



 /* -------------------------------------------------------------------------------------------------------------
					Insert to table supliers in database
	-------------------------------------------------------------------------------------------------------------*/
Route::post('suplier', array('before' => 'auth', 'do' => function() { 
    $new_post = array(
        'id'    => Input::get('id'),
        'nama'     => Input::get('nama'),
        'alamat'   => Input::get('alamat')
    );
    
    $rules = array(
        'id'     => 'required|min:3|max:20',
        'nama'      => 'required|min:3',
        'alamat'      => 'required|min:3'
    );
     
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails() )
    {
        return Redirect::to('suplier')
                ->with_errors($validation)
                ->with_input();
    }
    // create the new post after passing validation
    $post = new Suplier($new_post);
    $post->save();
    // redirect to viewing all posts
    return Redirect::to('suplier');
}));

Route::delete('hapus', function(){
		$id = Input::get('id');		
		suplier::where('id','=',$id)->delete();
		return Redirect::to('suplier');
	});
/* -------------------------------------------------------------------------------------------------------------
					End Insert to table supliers in database
	-------------------------------------------------------------------------------------------------------------*/
	
	
	
/* -------------------------------------------------------------------------------------------------------------
					Insert to table barangs in database
	-------------------------------------------------------------------------------------------------------------*/
Route::post('barang', array('before' => 'auth', 'do' => function() {
    $new_post = array(
        'kode'    => Input::get('kode'),
        'nama'     => Input::get('nama'),
        'harga'   => Input::get('harga')
    );
    
    $rules = array(
        'kode'     => 'required|min:3|max:20',
        'nama'      => 'required|min:3',
        'harga'      => 'required|min:3'
    );
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails() )
    {   
        return Redirect::to('barang')
                ->with_errors($validation)
                ->with_input();
    }
    // create the new post after passing validation
    $post = new Barang($new_post);
    $post->save();
    // redirect to viewing all posts
    return Redirect::to('barang');
}));

Route::delete('hapusBarang', function(){
		$id = Input::get('id');		
		barang::where('id','=',$id)->delete();
		return Redirect::to('barang');
	});
/* -------------------------------------------------------------------------------------------------------------
					End Insert to table barangs in database
	-------------------------------------------------------------------------------------------------------------*/
 
 

Event::listen('404', function()
{
    return Response::error('404');
});
 
Event::listen('500', function()
{
    return Response::error('500');
});
 
/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|       Route::filter('filter', function()
|       {
|           return 'Filtered!';
|       });
|
| Next, attach the filter to a route:
|
|       Router::register('GET /', array('before' => 'filter', function()
|       {
|           return 'Hello World!';
|       }));
|
*/
 
Route::filter('before', function()
{
    // Do stuff before every request to your application...
});
 
Route::filter('after', function($response)
{
    // Do stuff after every request to your application...
});
 
Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});
 
 Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('login');
});
?>