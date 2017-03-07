<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
	public function meeting(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'Холбоо барих',
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

	public function subscribe(Request $request) {
		$email = $request->get('email');

		$subscribe = new \App\Subscribe;
		$subscribe->email = $request->get('email');
		$subscribe->save();

		return response()->json([
			'success' => true,
		], 200);
	}
}
