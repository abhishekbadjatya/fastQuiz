<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Questions;
use Response;
use Illuminate\Support\Facades\Input;



class newGameController extends Controller
{
    //
    public function getLevelOne(){
		
		$response = Questions::getQuestionsOfLevel(1);
		return \Response::json($response);
		//$articles= Article::all();
		//return $articles;
	}

	
	
}
