<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Levels extends Model {
	public static function getMaxLevel(){
		$maxLevel = DB::table('levels')->max('levelId');
		return $maxLevel;
	}
}