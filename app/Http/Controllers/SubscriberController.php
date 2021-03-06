<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Subscriber $subscriber)
    {
    	request()->validate(['email' => 'required|email|unique:subscribers']);
    	$subscriber->create(['email' => request('email')]);
    	return response()->json(['success'=>'Thank you for subscribing!']);
    }
}
