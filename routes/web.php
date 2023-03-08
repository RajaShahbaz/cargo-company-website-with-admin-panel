<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/AdminLogin', function () {
    return view('login');
})->name('login');
Route::group(['namespace' => 'App\Http\Controllers','prefix'=>'Admin','as'=>'admin.'], function () {
    Route::post('/AdminLogin', 'UserController@login')->name('postlogin');
    Route::middleware('auth')->group(function () {
  Route::get('/Invoice', function () {
        return view('Admin.invoice');
        })->name('invoice');

        // Route::get('/Sign-In', function () {
    //     return view('Admin.login');
        // })->name('login');

        Route::get('/Users', 'UserController@index')->name('users');
        Route::get('/delete-user/{id}', 'UserController@destroy')->name('deleteuser');
        Route::Post('/Add-User', 'UserController@store')->name('postuser');
        Route::get('/Contacts', 'ContactsController@index')->name('contacts');
        Route::Post('/Contact', 'ContactsController@store')->name('postcontact');
        Route::get('/Logout', 'UserController@logout')->name('logout');
        Route::get('/Inventory', 'CargoInventoryController@Index')->name('cargoinventory');
        Route::get('/Add-Inventory', 'CargoInventoryController@create')->name('addinventory');
        Route::Post('/Add-Inventory', 'CargoInventoryController@store')->name('postinventory');
        Route::Post('/Search', 'CargoInventoryController@search')->name('searchinventory');
        Route::get('/show/{id}', 'CargoInventoryController@show')->name('showinventory');
        Route::get('/edit/{id}', 'CargoInventoryController@edit')->name('editinventory');
        Route::get('/Inventory/{name}', 'CargoInventoryController@databybranch')->name('branchinventory');




        Route::get('/Dashboard', function () {
            return view('admin.index');
        })->name('dashboard');
        // Route::get('/Add-Inventory', function () {
        //     return view('admin.add-inventory');
        // })->name('addinventory');
        // Route::get('/Users', function () {
    //     return view('Admin.users');
        // })->name('users');
        // Route::get('/Contacts', function () {
    //     return view('Admin.contacts');
        // })->name('contacts');
        Route::get('/Add-User', function () {
            return view('admin.add-user');
        })->name('add-user');
    });
});
Route::get('/', function () {
    return view('index');
});
Route::get('/Home', function () {
    return view('index');
})->name('index');
Route::get('/About', function () {
    return view('about');
})->name('about');
Route::get('/Contact', function () {
    return view('contact');
})->name('contact');
Route::get('/What-We-Deliver', function () {
    return view('shipment');
})->name('shipment');
Route::get('/Services', function () {
    return view('services');
})->name('services');
Route::get('/Service-Detail', function () {
    return view('service-detail');
})->name('service-detail');
