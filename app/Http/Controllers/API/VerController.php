<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerController extends Controller
{
	//construct
	public function index() {
		$json = ['a'=>'やったぁ成功しましたよ'];
		return json_encode($json);
	}
}
