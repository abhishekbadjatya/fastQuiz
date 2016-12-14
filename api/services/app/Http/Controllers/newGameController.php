<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Questions;
use Response;
use Illuminate\Support\Facades\Input;
use Session;


class NewGameController extends Controller
{
    //
    public function getLevelOne(){
		if (Session::has('score')) {

			Session::forget('score');

		}
		$response = Questions::getQuestionsOfLevel(1);
		return \Response::json($response);
	}

	
	
}
