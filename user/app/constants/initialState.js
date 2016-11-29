let initialState = () => {

	return {

		"userInfo" : {

			"username" : null,
			"isLoggedIn" : false,
			"isLoggedInChecked" : false
		},
		"notifConfig" : {
			
			isTriggered : false,
			level : null,
			message : null

		},
		"game" : {

			status : {
				'isLevelFetched' :false,
				'currentLevel' : null,
				'currentQuestionId' : null,
				'gameComponentScreenType' : null,
				'isLastQuestionOfLevel' : false,
				'hasQualified' : false
				

			},
			levels : []


		},

		"leaderboard" : [
		{
				"userId": "userid",
	   	 		 "username": "username",
	   				 "maxLevelReached":"maxlevelreached",
	   				 "maxScore":"maxScore"
			 	}
		]

			// "leaderboard":[
			// 	{
			// 		"UserId": "userid",
			// 		 "Username": "username",
	  // 				 "maxLevelReached":"maxlevelreached",
	  // 				 "maxScore":"maxScore"
			// 	}]
		

	};

};


export default initialState ();