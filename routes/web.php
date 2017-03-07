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

Route::group(['middleware' => 'locale'], function () {
    Route::get('/', function () {
		$locale = Config::get('app.locale');
	    if (Session::has('locale')) {
	        $locale = Session::get('locale');
	    }
	    if ($locale == 'en') {
        	return view('en.crm');
		}
		else {
        	return view('mn.crm');
		}
    });
    Route::get('pms', function () {
		$locale = Config::get('app.locale');
	    if (Session::has('locale')) {
	        $locale = Session::get('locale');
	    }
	    if ($locale == 'en') {
        	return view('en.pms');
		}
		else {
        	return view('mn.pms');
		}
    });
    Route::get('eprocurement', function () {
		$locale = Config::get('app.locale');
	    if (Session::has('locale')) {
	        $locale = Session::get('locale');
	    }
	    if ($locale == 'en') {
        	return view('en.scs');
		}
		else {
        	return view('mn.scs');
		}
    });
    Route::get('projects', function () {
		$locale = Config::get('app.locale');
	    if (Session::has('locale')) {
	        $locale = Session::get('locale');
	    }
	    if ($locale == 'en') {
        	return view('en.op');
		}
		else {
        	return view('mn.op');
		}
    });
    Route::get('about', function () {
		$locale = Config::get('app.locale');
	    if (Session::has('locale')) {
	        $locale = Session::get('locale');
	    }
	    if ($locale == 'en') {
        	return view('en.about');
		}
		else {
        	return view('mn.about');
		}
    });
});

Route::get('change', function () {
	$locale = Config::get('app.locale');
    if (Session::has('locale')) {
        $locale = Session::get('locale');
    }
    if ($locale == 'en') {
	    Session::put('locale', 'mn');
    }
    else {
	    Session::put('locale', 'en');
    }
    
    return back();
});

Route::post('send/crm/price', 'CRMController@price');
Route::post('send/crm/cloud/price', 'CRMController@cloudPrice');
Route::post('send/crm/meeting', 'CRMController@meeting');

Route::post('send/pms/demo', 'PMSController@demo');
Route::post('send/pms/custom', 'PMSController@custom');
Route::post('send/pms/cloud/price', 'PMSController@cloudPrice');
Route::post('send/pms/meeting', 'PMSController@meeting');

Route::post('send/scs/demo', 'SCSController@demo');
Route::post('send/scs/price', 'SCSController@price');
Route::post('send/scs/cloud/price', 'SCSController@cloudPrice');
Route::post('send/scs/meeting', 'SCSController@meeting');

Route::post('send/contact/subscribe', 'ContactController@subscribe');
Route::post('send/contact/meeting', 'ContactController@meeting');