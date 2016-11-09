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
		$currentLevel = $payload['level'];


		$currentLevelQuestionIds = Questions::getQuestionIdsOfLevel($currentLevel);
		//return $currentLevelQuestionIds;
		foreach ($payLoadAnswers as $answer) {
			if (!in_array($answer['questionId'], $currentLevelQuestionIds)){
				//return $answer['questionId'];
				//return $currentLevelQuestionIds;
				return \Response::json(array('ERROR'=>"QUESTION NOT IN CURRENT LEVEL"));
			}
		}

//check if the question ids given are valid question ids or not

		$correctOptionIds = Options::getCorrectOptionIds($payLoadAnswers); 
		//return $correctOptionIds;
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
			//echo 'Initial: ' . Session::get('score'). '<br/>';
			$updatedScore = Session::get('score') + $countOfCorrect;
			//Session::forget('score');
			Session::put('score', $updatedScore);
			//echo Session::get('score');
		}
		else {
			//echo 'entered else';
			Session::put('score', $countOfCorrect);
		}

		
		$nextLevel = $currentLevel + 1;
		$maxLevel = Levels::getMaxLevel();
		$totalScore = Session::get('score');


		$obj = new stdClass();
		if($currentLevel == $maxLevel){
			$obj->isGameOver = true;
		} else {
			$obj->isGameOver = false;
		}
		$obj->score = $countOfCorrect;
		$obj->totalScore = $totalScore;
		$obj->totalNoOfQuestionsInCurrentLevel = $countOfTotal;
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

