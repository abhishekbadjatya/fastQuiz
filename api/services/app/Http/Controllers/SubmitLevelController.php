<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use stdClass;
use Session;
use App\Levels;
use App\Options;
use App\Questions;

class SubmitLevelController extends Controller {
	
	public static function index() {

		$payload = Input::all();

		$payLoadAnswers = $payload['answers'];

		$correctOptionIds = Options::getCorrectOptionIds($payLoadAnswers); 
		$k = 0;
		$countOfCorrect = 0;
		$countOfTotal = 0;
		$obj1 = new stdClass();
		$obj1->correctAnswers = array ();

		$questionIdArr = array();
		foreach ($payLoadAnswers as $answer){
			array_push($questionIdArr, array('questionId' => $answer['questionId'], 'optionId' => $answer['optionId']));
		}
		asort($questionIdArr);
		
		foreach ($questionIdArr as $answer){
			$countOfTotal++;
			$dbElement = $correctOptionIds[$answer['questionId']];
			$payloadElement = $answer['optionId'];
			if($dbElement == $payloadElement){
				$countOfCorrect++;
			}
			
		    array_push($obj1->correctAnswers, array (

		    		"questionId" => $answer['questionId'],
		    		"correctAnswerOptionId" => $dbElement 
		    	));
		}

		$percent = $countOfCorrect/$countOfTotal;

		if(Session::has('score')){
			$updatedScore = Session::get('score') + $countOfCorrect;
			Session::forget('score');
			Session::put('score', $updatedScore);
		}
		else {
			Session::put('score', $countOfCorrect);
		}

		$currentLevel = $payload['level'];
		$nextLevel = $currentLevel + 1;
		$maxLevel = Levels::getMaxLevel();

		$obj = new stdClass();
		if($currentLevel == $maxLevel){
			$obj->isGameOver = true;
		} else {
			$obj->isGameOver = false;
		}
		$obj->score = $countOfCorrect;
		$obj->previous = array('correctAnswers' => $obj1->correctAnswers);

		if($percent > 0.5){
			$obj->hasQualified = true;
			$obj->next = Questions::getQuestionsOfLevel($nextLevel);
			return \Response::json($obj);
		}
		else{
			$obj->hasQualified = false;
			
			return \Response::json($obj);
		}
	}
}


		//echo $payload['toppings'][2]['type']; //Maple


		/*$questionLevel = $payload['questionLevel'];
		$questionIds = app('App\Http\Controllers\SubmitLevelController')->getQuestionIds($questionLevel);*/

//$tempArr = array('questionId' => $answer['questionId']);
			//$dbElement
			
			// $obj1->correctAnswers = array('correctAnswers' => array(
		 //    	array(array('questionId' => $answer['questionId']), array('correctAnswerOptionId' => $dbElement))

/*$obj1 = new stdClass();
			$obj1->correctAnswers = array('correctAnswers' => array(
			    array(array('questionId' =>'3.0'), array('correctAnswerOptionId' => '3.9'))
			    
			    //and so on...
			));*/

//$obj->score = $countOfCorrect;
			//$obj->previous = array('correctAnswers' => $obj1->correctAnswers);

			//echo json_encode($obj);

			/*
			{
				"hasQualified" : true/false,
			  "score" : "8/10" //whatever is the score
			  "next" : {
			  		"level" :  <>,
			      "questions" : //same as above
			  
			  
			  }, 
			  "previous" : {
			  
			  	correctAnswers : [{
			    	
			      "questionId" : <>,
			      "correctAnswerOptionId" : <>,
			      
			    
			    },{
			    	
			      "questionId" : <>,
			      "correctAnswerOptionId" : <>,

			    }]
			  }
			}

			*/

			/*
			{ 
			    "label": "Devices per year",
			    "data": [
			        [1999, 3.0], [2000, 3.9], [2001, 2.0], [2002, 1.2], [2003, 1.3], [2004, 2.5], [2005, 2.0], [2006, 3.1], [2007, 2.9], [2008, 0.9]
			    ]
			}
			*/

//return Response::json($questionIds);

/*
	public static function getMaxLevel(){
		$maxLevel = DB::table('levels')->max('levelId');
		return $maxLevel;
	}

	public static function getCorrectOptionIds($answers){
		$correctOptionIds = array();
		//$k = 0;
		$questionIdArr = array();
		foreach ($answers as $answer){
			array_push($questionIdArr, $answer['questionId']);
		}
			//$articles = Article::getAllArticles();
			
			$result = DB::table('options')
				->whereIn('questionId', $questionIdArr)
				->where('isCorrect', true)
				->orderBy('questionId', 'asc')
				->pluck('optionId', 'questionId');

			$correctOptionIds = $result; // output: questionId, optionId
			//print_r($correctOptionIds);

			//var_dump($correctOptionIds);
		
		
			//echo '<br>Test: ';
			//print_r($correctOptionIds);
			//echo '<br>';
		

		/*([
		    ['column_1', '=', 'value_1'],
		    ['column_2', '<>', 'value_2'],
		    [COLUMN, OPERATOR, VALUE],
		    ...
		])*/
	/*	
		return $correctOptionIds;

		/*
			return \Response::json($articles);
		*/
		
		//$articles= Article::all();
		//return $articles;
	//}

/*$payload = Input::all();
		return $payload['username'];*/
		//SubmitLevelController sLC = new SubmitLevelController();