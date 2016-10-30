<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Options;

class Questions extends Model
{
    //
    protected $table = 'questions';
	public static function getQuestions () {
		return Questions::get()->toArray();
	}
	public static function getQuestionsOfLevel ($level) {
		$questions=Questions::where('questionLevel', '=', $level)->select('questionId', 'questionText')->get()->toArray();
		$questionId=array();
		foreach ($questions as $question){
			array_push($questionId, $question['questionId']);
		}
		$options=Options::getOptionsForQuestions($questionId);
		//return $options;
		//return $questionId;
		//return $questions[0];
		//return $question;
		$optionsFormatted = array();
		foreach ($options as $option){
			$array_temp=array("optionId"=>$option['optionId'],"optionLabel"=>$option['optionLabel']);
			//return $array_temp;
			if (array_key_exists($option['questionId'], $optionsFormatted)){
				array_push($optionsFormatted[$option['questionId']],$array_temp);
				//array_push($optionsFormatted[$option['questionId']],"test");
			}
			else{
				$optionsFormatted[$option['questionId']] = array();
				array_push($optionsFormatted[$option['questionId']],$array_temp);
				//return $optionsFormatted;			
			}
		}
		//return $optionsFormatted;
		$final = array();
		foreach ($questions as $question){
		//	$json = json_decode($question);
			$array_temp = array();
			$array_temp['questionId']=$question['questionId'];
			$array_temp['questionText']=$question['questionText'];
			$array_temp['options']=$optionsFormatted[$question['questionId']];
			//return $array_temp;
			//break;
			array_push($final, $array_temp);
		}
		$responseArray=array('level'=>$level,'questions'=>$final);
		//$responseArray['level']=
		return $responseArray;
	}

	

}
