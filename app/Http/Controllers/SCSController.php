<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class SCSController extends Controller
{
	public function demo(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'SCS',
	    	'subtitle' => 'Дэмо авах хүсэлт',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('info@alchemist.mn');
			$message->subject('Дэмо авах хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}
	public function price(Request $request) {
		$options = [];
		if ($request->get('budget-management') == 'on') {
			$options[] = 'Budget management - Төсвийн удирдлага';
		}
		if ($request->get('payment-management') == 'on') {
			$options[] = 'Payment management - Төлбөрийн удирдлага';
		}
		if ($request->get('asset-management') == 'on') {
			$options[] = 'Asset management - Худалдан авалтын удирдлага';
		}
		if ($request->get('business-trip-management') == 'on') {
			$options[] = 'Business trip management - Томилолтын удирдлага';
		}
		if ($request->get('purchase-management') == 'on') {
			$options[] = 'Purchase management - Хөрөнгийн удирдлага';
		}
		if ($request->get('onsite') == 'on') {
			$options[] = 'Onsite - Гэрээний удирдлага';
		}
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'SCS',
	    	'subtitle' => 'Үнийн санал авахыг хүссэн модулиуд',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('info@alchemist.mn');
			$message->subject('Үнийн санал авах хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}

	public function cloudPrice(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'SCS',
	    	'subtitle' => 'Онлайн ашиглах үнийн санал авах',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('info@alchemist.mn');
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
	    	'title' => 'SCS',
	    	'subtitle' => 'Уулзалт товлох хүсэлт',
	    	'options' => $options,
    		'email' => $email,
	    ], function($message) {
			$message->to('info@alchemist.mn');
			$message->subject('Уулзалт товлох хүсэлт');
		});

		return response()->json([
			'success' => true,
		], 200);
	}
}
