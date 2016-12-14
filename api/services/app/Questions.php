<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Options;

class Questions extends Model
{
    //
    protected $table = 'questions';

	public static function getQuestionIdsOfLevel ($level) {
		//return Questions::where('questionLevel', '=', $level)->select('questionId')->get()->toArray();
		$result = DB::table('questions')
					->where('questionLevel', $level)
					->pluck('questionId');
		return $result->toArray();
	}
	public static function getQuestionsOfLevel ($level) {
		$questions=Questions::where('questionLevel', '=', $level)->select('questionId', 'questionText')->get()->toArray();
		$questionId=array();
		foreach ($questions as $question){
			array_push($questionId, $question['questionId']);
		}
		$options=Options::getOptionsForQuestions($questionId);
		$optionsFormatted = array();
		foreach ($options as $option){
			$arrayTemp=array("optionId"=>$option['optionId'],"optionLabel"=>$option['optionLabel']);
			//return $arrayTemp;
			if (array_key_exists($option['questionId'], $optionsFormatted)){
				array_push($optionsFormatted[$option['questionId']],$arrayTemp);
				//array_push($optionsFormatted[$option['questionId']],"test");
			}
			else{
				$optionsFormatted[$option['questionId']] = array();
				array_push($optionsFormatted[$option['questionId']],$arrayTemp);
				//return $optionsFormatted;			
			}
		}
		//return $optionsFormatted;
		$final = array();
		foreach ($questions as $question){
		//	$json = json_decode($question);
			$arrayTemp = array();
			$arrayTemp['questionId']=$question['questionId'];
			$arrayTemp['questionText']=$question['questionText'];
			$arrayTemp['options']=$optionsFormatted[$question['questionId']];
			//return $arrayTemp;
			//break;
			array_push($final, $arrayTemp);
		}
		$responseArray=array('level'=>$level,'questions'=>$final);
		//$responseArray['level']=
		return $responseArray;
	}

	

}
