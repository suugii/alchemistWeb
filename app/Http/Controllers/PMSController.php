<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PMSController extends Controller
{
	public function demo(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'PMS',
	    	'subtitle' => 'Дэмо авах хүсэлт',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('byambaa.122@gmail.com');
			$message->subject('Дэмо авах хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}

	public function custom(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'PMS',
	    	'subtitle' => 'Custom PMS авах хүсэлт',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('byambaa.122@gmail.com');
			$message->subject('Custom PMS авах хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}

	public function cloudPrice(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'PMS',
	    	'subtitle' => 'Онлайн ашиглах үнийн санал авах',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('byambaa.122@gmail.com');
			$message->subject('Үнийн санал авах хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}

	public function meeting(Request $request) {
		$options = [];
		$options[] = $request->get('date'); 
		$options[] = $request->get('phone');
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'PMS',
	    	'subtitle' => 'Уулзалт товлох хүсэлт',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('byambaa.122@gmail.com');
			$message->subject('Уулзалт товлох хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}
}
