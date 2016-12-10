<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Options extends Model
{
    //
    protected $table = 'options';

	public static function getOptionsForQuestions($questions) {
		$q=join(",",$questions);   
		//return $q;
		return Options::whereIn('questionId',  $questions)->select('optionId', 'optionLabel','questionId')->get()->toArray();

		//get()->toArray();
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
			return $correctOptionIds;
		}

}
