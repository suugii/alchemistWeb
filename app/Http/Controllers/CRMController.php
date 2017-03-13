<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CRMController extends Controller
{
	public function price(Request $request) {
		$options = [];
		if ($request->get('warehouse-inventory') == 'on') {
			$options[] = 'Warehouse Inventory - Агуулахын бүртгэл';
		}
		if ($request->get('sales-customer-history') == 'on') {
			$options[] = 'Sales, customer history - Борлуулалт харилцагчийн дэвтэр';
		}
		if ($request->get('activity-management') == 'on') {
			$options[] = 'Activity management - Үйл ажиллагааны бүртгэл';
		}
		if ($request->get('project-management') == 'on') {
			$options[] = 'Project management - Төслийн удирдлага';
		}
		if ($request->get('supply-chain') == 'on') {
			$options[] = 'Supply chain - Ханган нийлүүлэлт';
		}
		if ($request->get('cloud-or-onsite') == 'on') {
			$options[] = 'Cloud or Onsite - Суурилуулалт';
		}
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'CRM',
	    	'subtitle' => 'Үнийн санал авахыг хүссэн модулиуд',
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

	public function cloudPrice(Request $request) {
		$options = [];
		$email = $request->get('email');

	    Mail::send('email.email', [
	    	'title' => 'CRM',
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
	    	'title' => 'CRM',
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
